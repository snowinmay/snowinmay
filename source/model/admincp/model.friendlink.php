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
class friendlinkAModel extends X {
    
    public function getList($items) {
        $where      = " WHERE 1=1".$items['searchsql'];
        $start      = ($items['page']-1)*$items['pagesize'];
        $countsql   = "SELECT COUNT(id) FROM ".DB_PREFIX."friendlink".$where;
        $total      = parent::$obj->fetch_count($countsql);
        $sql        = "SELECT * FROM ".DB_PREFIX."friendlink".$where.
                        " ORDER BY orders ASC LIMIT {$start}, ".$items['pagesize']."";
        $array = parent::$obj->getall($sql);
        return array($total, $array);
    }

    
    public function getData($id) {
        $sql = "SELECT * FROM ".DB_PREFIX."friendlink WHERE id='{$id}'";
        return parent::$obj->fetch_first($sql);
    }
    
    
    public function doAdd($array) {
        $id = parent::$obj->fetch_newid('SELECT MAX(id) FROM '.DB_PREFIX.'friendlink', 1);
        $array = array_merge(array(
                'id'=>$id,
                'addtime'=>time(),
            ), $array);
        return parent::$obj->insert(DB_PREFIX.'friendlink', $array);
    }
    
    
    public function doEdit($id, $array) {
        return parent::$obj->update(DB_PREFIX.'friendlink', $array, "id='{$id}'");
    }
    
    
    public function doDel($id) {
        $res = false;
        $sql = "DELETE FROM ".DB_PREFIX."friendlink WHERE id='{$id}'";
        $res = parent::$obj->query($sql);
        return $res;
    }

    
    public function getOrders($parentid=0) {
        return parent::$obj->fetch_newid("SELECT MAX(orders) FROM ".DB_PREFIX."friendlink", 1);
    }

    
    public function doUpdate($id, $type) {
        if ($type == 'flagopen') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."friendlink SET flag='1' WHERE id='{$id}'");
        }
        elseif ($type == 'flagclose') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."friendlink SET flag='0' WHERE id='{$id}'");
        }
    }
}
?>
