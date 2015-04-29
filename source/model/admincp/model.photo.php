<?php
/**
 * [OECMS] (C)2012-2099 OEdev,Inc.
 * <E-Mail：phpcoo@qq.com>
 * Url http://www.phpcoo.com
 *     http://www.oephp.com
 * Update 2013.11.19
*/
if(!defined('IN_OECMS')) {
	exit('OECMS Access Denied');
}
class photoAModel extends X {
    
    public function getList($items) {
        $where      = " WHERE 1=1".$items['searchsql'];
        $start      = ($items['page']-1)*$items['pagesize'];
        $countsql   = "SELECT COUNT(*) AS my_count FROM ".DB_PREFIX."photo AS v".$where;
        $total      = parent::$obj->fetch_count($countsql);
        $sql        = "SELECT v.*,c.catname,c.dirname FROM ".DB_PREFIX."photo AS v".
                        " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                      $where." ORDER BY v.addtime DESC LIMIT ".$start.", ".$items['pagesize']."";
        $array = parent::$obj->getall($sql);
        foreach ($array as $key=>$value) {
            $array[$key]['url'] = XUrl::getContentUrl('photo', $value['dirname'], $value['photoid']);
        }
        return array($total, $array);
    }
    
    
    public function getData($id) {
        $sql = "SELECT v.*,c.catname FROM ".DB_PREFIX."photo AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.photoid='".intval($id)."'";
        $data = parent::$obj->fetch_first($sql);
        
        
        if (!empty($data)) {
            $data['gallery'] = XHandle::dounSerialize($data['albums']);
            
            
            if (is_array($data['gallery'])) {
                $i = 1;
                foreach($data['gallery'] as $key=>$value) {
                    $data['gallery'][$key]['i'] = $i;
                    $i = ($i+1);
                }
                $data['gallery_num'] = count($data['gallery']);
            }
            else {
                $data['gallery_num'] = 0;
            }
        }
        else {
            $data['gallery'] = NULL;
            $data['gallery_num'] = 0;
        }              
        return array($data);
    }
    
    
    public function doAdd($array, $attrs) {
        $photoid = parent::$obj->fetch_newid('SELECT MAX(photoid) FROM '.DB_PREFIX.'photo', 1);
        
        $m = parent::model('category', 'am');
        $data = $m->getCatModule(intval($array['treeid']));
        $modalias = $data['modalias'];
        unset($m);
        
        $array = array_merge(array(
                'photoid'=>$photoid,
                'modalias'=>$modalias,
                'updatetime'=>time(),
            ), $array);
        $result = parent::$obj->insert(DB_PREFIX.'photo', $array);
        
        
        if (true === $result) {
            if (!empty($attrs)) {
                foreach ($attrs as $key=>$value) {
                    $attr_sql = "SELECT id FROM ".DB_PREFIX."photo_attr WHERE aid='".intval($value['aid'])."' AND relid='".intval($photoid)."'";
                    $attr_rows = parent::$obj->fetch_first($attr_sql);
                    
                    if (empty($attr_rows)) {
                        $id = parent::$obj->fetch_newid("SELECT MAX(id) FROM ".DB_PREFIX."photo_attr", 1);
                        $attr_array = array(
                            'id'=>$id,
                            'aid'=>intval($value['aid']),
                            'extvalue'=>trim($value['extvalue']),
                            'relid'=>$photoid,
                        );
                        parent::$obj->insert(DB_PREFIX.'photo_attr', $attr_array);
                    }
                    
                    else {
                        $attr_array = array(
                            'extvalue'=>trim($value['extvalue']),
                        );
                        parent::$obj->update(DB_PREFIX.'photo_attr', $attr_array, "id='".intval($attr_rows['id'])."'");
                    }
                }
            }
        }
        return $result;
    }
    
    
    public function doEdit($id, $array, $attrs) {
        $result = parent::$obj->update(DB_PREFIX.'photo', $array, "photoid='".intval($id)."'");
        
        
        if (true === $result) {
            if (!empty($attrs)) {
                foreach ($attrs as $key=>$value) {
                    $attr_sql = "SELECT id FROM ".DB_PREFIX."photo_attr WHERE aid='".intval($value['aid'])."' AND relid='".intval($id)."'";
                    $attr_rows = parent::$obj->fetch_first($attr_sql);
                    
                    if (empty($attr_rows)) {
                        $attr_id = parent::$obj->fetch_newid("SELECT MAX(id) FROM ".DB_PREFIX."photo_attr", 1);
                        $attr_array = array(
                            'id'=>$attr_id,
                            'aid'=>intval($value['aid']),
                            'extvalue'=>trim($value['extvalue']),
                            'relid'=>$id,
                        );
                        parent::$obj->insert(DB_PREFIX.'photo_attr', $attr_array);
                    }
                    
                    else {
                        $attr_array = array(
                            'extvalue'=>trim($value['extvalue']),
                        );
                        parent::$obj->update(DB_PREFIX.'photo_attr', $attr_array, "id='".intval($attr_rows['id'])."'");
                    }
                }
            }
        }
        
        return $result;
    }
    
    
    public function doDel($id) {
        $sql = "SELECT thumbfiles,uploadfiles,albums FROM ".DB_PREFIX."photo WHERE photoid='".intval($id)."'";
        $rows = parent::$obj->fetch_first($sql);
        if (!empty($rows)) {
            
            if (!empty($rows['thumbfiles'])) {
                if (substr($rows['thumbfiles'], 0, 15) == 'data/attachment'){
                    parent::loadUtil('file');
                    XFile::delFile($rows['thumbfiles']);
                }
            }
            if (!empty($rows['uploadfiles'])) {
                if (substr($rows['uploadfiles'], 0, 15) == 'data/attachment'){
                    parent::loadUtil('file');
                    XFile::delFile($rows['uploadfiles']);
                }
            }
            
            parent::$obj->query("DELETE FROM ".DB_PREFIX."photo WHERE photoid='".intval($id)."'");
            
            parent::$obj->query("DELETE FROM ".DB_PREFIX."photo_attr WHERE relid='".intval($id)."'");
            
            if (!empty($rows['albums'])) {
                $albums_data = XHandle::dounSerialize($rows['albums']);
                if (is_array($albums_data)) {
                    foreach ($albums_data as $key=>$value) {
                        
                        if (substr($value['imgthumb'], 0, 15) == 'data/attachment'){
                            parent::loadUtil('file');
                            XFile::delFile($value['imgthumb']);
                        }
                        
                        if (substr($value['imgurl'], 0, 15) == 'data/attachment'){
                            parent::loadUtil('file');
                            XFile::delFile($value['imgurl']);
                        }
                    }
                }
            }        

            return true;
        }
        else {
            return false;
        }
    }
        
    
    public function doUpdate($id, $type) {
        if ($type == 'flagopen') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."photo SET flag='1' WHERE photoid='".intval($id)."'");     
        }
        elseif ($type == 'flagclose') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."photo SET flag='0' WHERE photoid='".intval($id)."'"); 
        }
        elseif ($type == 'istopopen') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."photo SET istop='1' WHERE photoid='".intval($id)."'");   
        }
        elseif ($type == 'istopclose') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."photo SET istop='0' WHERE photoid='".intval($id)."'");   
        }
        elseif ($type == 'eliteopen') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."photo SET elite='1' WHERE photoid='".intval($id)."'");   
        }
        elseif ($type == 'eliteclose') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."photo SET elite='0' WHERE photoid='".intval($id)."'");   
        }
    }
    
    
    public function doAddExistsFileName($filename) {
        $sql = "SELECT photoid FROM ".DB_PREFIX."photo WHERE filename='{$filename}'";
        $rows = parent::$obj->fetch_first($sql);
        if (!empty($rows)) {
            return true;
        }
        else {
            return false;
        }
        unset($rows);
    }
    
    
    public function doEditExistsFileName($id, $filename) {
        $sql = "SELECT COUNT(photoid) FROM ".DB_PREFIX."photo WHERE filename='{$filename}' AND photoid<>'{$id}'";
        $count = parent::$obj->fetch_count($sql);
        if ($count>0) {
            return true;
        }
        else {
            return false;
        }
    }
    
}
?>
