<?php
/**
 * [OECMS] (C)2012-2099 OEdev,Inc.
 * <E-Mail：service@phpcoo.com>
 * Url http://www.phpcoo.com
 *     http://www.oephp.com
 * Update 2014.04.03
*/
if(!defined('IN_OECMS')) {
    exit('OECMS Access Denied');
}
class downloadIModel extends X {
    
    public function getList($items) {
        $pagesize   = intval($items['pagesize']);
        $where      = " WHERE 1=1".$items['searchsql'];
        $start      = ($items['page']-1)*$pagesize;
        $countsql   = "SELECT COUNT(*) AS my_count FROM ".DB_PREFIX."download AS v".$where;
        $total      = parent::$obj->fetch_count($countsql);
        $sql        = "SELECT v.*,c.catname,c.asname,c.dirname,c.catpic".
                        ",c.linktype AS catlinktpye,c.outurl".
                        " FROM ".DB_PREFIX."download AS v".
                        " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                      $where.$items['orderby']." LIMIT ".$start.", ".$pagesize."";
        $data = parent::$obj->getall($sql);
        return array($total, $this->_handleList($data));
    }
    
    
    public function getVolist($where='', $orderby='', $num=0, $limit='') {
        $sql = "SELECT v.*,c.catname,c.asname,c.dirname,c.catpic,c.linktype AS catlinktpye,c.outurl".
                " FROM ".DB_PREFIX."download AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.flag='1'";
        $sql .= !empty($where) ? ' AND '.$where : '';
        $sql .= !empty($orderby) ? ' '.$orderby : ' ORDER BY v.addtime DESC';
        if (!empty($limit)) {
            $sql .= " LIMIT {$limit}";
        }
        else {
            $num = intval($num)<1 ? intval(parent::$cfg['downnum']) : intval($num);
            $sql .= " LIMIT {$num}";
        }
        $data = parent::$obj->getall($sql);
        return $this->_handleList($data);  
        
    }
    
    
    public function getOneData($id) {
        $data = $attr_data = $catdata = array();
        $sql = "SELECT v.*, c.dirname, m.tpldetail AS mod_tpldetail".
                " FROM ".DB_PREFIX."download AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " LEFT JOIN ".DB_PREFIX."module AS m ON v.modalias=m.alias".
                " WHERE v.downid='{$id}'";
        $data = parent::$obj->fetch_first($sql);
        if (!empty($data)) {
            #URL路由
            $m_label = parent::model('label', 'im');
            if ($data['linktype'] == 2) {
                $data['url'] = $m_label->repLabel($data['linkurl']);
            }
            else {
                $data['url'] = XUrl::getContentUrl('download', $data['dirname'], $data['downid']);
            }
            unset($m_label);
            #图片处理
            if (empty($data['thumbfiles'])) {
                $data['thumbfiles'] = parent::$urlpath.'tpl/static/images/nopic_s.jpg';
            }
            else {
                if (substr($data['thumbfiles'], 0, 15) == 'data/attachment') {
                    $data['thumbfiles'] = parent::$urlpath.$data['thumbfiles'];
                }
            }
            if (empty($data['uploadfiles'])) {
                $data['uploadfiles'] = parent::$urlpath.'tpl/static/images/nopic.jpg';
            }
            else {
                if (substr($data['uploadfiles'], 0, 15) == 'data/attachment') {
                    $data['uploadfiles'] = parent::$urlpath.$data['uploadfiles'];
                }
            }
            
            $m_atrr = parent::model('modattr', 'im');
            $attr_data = $m_atrr->getAttrList('download', $id);
            $extend_data = $m_atrr->assembleAttr('download', $id);
            if (!empty($extend_data)) {
                $data = array_merge($data, $extend_data);
            }
            unset($m_atrr);
            
            
            $m_category = parent::model('category', 'im');
            $catdata = $m_category->getOneData(intval($data['catid']));
            unset($m_category);
            
            $this->_updateHits($id);

            
            $m_link = parent::model('relatedlink', 'im');
            $data['content'] = $m_link->tagContent('download', $data['content']);
            unset($m_link);

        }
        return array($data, $attr_data, $catdata);
    }
    
    
    public function getPrevious($treeid, $id) {
        $treeid = intval($treeid);
        $id = intval($id);
        $query = "SELECT v.*, c.dirname".
                " FROM ".DB_PREFIX."download AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.downid<{$id} AND v.flag='1' AND v.treeid='{$treeid}'".
                " ORDER BY v.downid DESC LIMIT 1";
        $rows = parent::$obj->fetch_first($query);
        if (!empty($rows)) {
            #URL路由
            if ($rows['linktype'] == 2) {
                $m_label = parent::model('label', 'im');
                $rows['url'] = $m_label->repLabel($rows['linkurl']);
                unset($m_label);
            }
            else {
                $rows['url'] = XUrl::getContentUrl('download', $rows['dirname'], $rows['downid']);
            }
        }
        unset($query, $treeid, $id);
        return $rows;
    }
    
    
    public function getNext($treeid, $id) {
        $treeid = intval($treeid);
        $id = intval($id);
        $query = "SELECT v.*, c.dirname".
                " FROM ".DB_PREFIX."download AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.downid>{$id} AND v.flag='1' AND v.treeid='{$treeid}'".
                " ORDER BY v.downid ASC LIMIT 1";
        $rows = parent::$obj->fetch_first($query);
        if (!empty($rows)) {
            #URL路由
            if ($rows['linktype'] == 2) {
                $m_label = parent::model('label', 'im');
                $rows['url'] = $m_label->repLabel($rows['linkurl']);
                unset($m_label);
            }
            else {
                $rows['url'] = XUrl::getContentUrl('download', $rows['dirname'], $rows['downid']);
            }
        }
        unset($query, $treeid, $id);
        return $rows;
    }
    
    
    private function _handleList($data) {
        if (!empty($data)) {
            $i = 1;
            foreach($data as $key=>$value) {            
                #URL路由
                $m_label = parent::model('label', 'im');
                if ($value['catlinktype'] == 2) {
                    $data[$key]['caturl'] = $m_label->repLabel($value['outurl']);
                }
                else {
                    $data[$key]['caturl'] = XUrl::getCategoryUrl('download', $value['catid'], $value['dirname']);
                }
                if ($value['linktype'] == 2) {
                    $data[$key]['url'] = $m_label->repLabel($value['linkurl']);
                }
                else {
                    $data[$key]['url'] = XUrl::getContentUrl('download', $value['dirname'], $value['downid']);
                }
                unset($m_label);
                #图片处理
                if (empty($value['thumbfiles'])) {
                    $data[$key]['thumbfiles'] = parent::$urlpath.'tpl/static/images/nopic_s.jpg';
                }
                else {
                    if (substr($value['thumbfiles'], 0, 15) == 'data/attachment') {
                        $data[$key]['thumbfiles'] = parent::$urlpath.$value['thumbfiles'];
                    }
                }
                if (empty($value['uploadfiles'])) {
                    $data[$key]['uploadfiles'] = parent::$urlpath.'tpl/static/images/nopic.jpg';
                }
                else {
                    if (substr($value['uploadfiles'], 0, 15) == 'data/attachment') {
                        $data[$key]['uploadfiles'] = parent::$urlpath.$value['uploadfiles'];
                    }
                }
                #标题处理
                $data[$key]['sort_title'] = XHandle::cutStrLen($value['title'], parent::$cfg['downloadlen']);
                $data[$key]['i'] = $i;
                $i = ($i+1); 
            }
        } 
        return $data;
    }
    
    
    private function _updateHits($id) {
        parent::$obj->update(DB_PREFIX.'download', array('hits'=>'[[hits+1]]'), '`downid`='.$id.'');
    } 
}
?>
