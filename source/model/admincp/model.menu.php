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
class menuAModel extends X {
    
    public function getRootList() {
        $sql = "SELECT * FROM ".DB_PREFIX."menu".
                " WHERE parentid='0' ORDER BY orders ASC";
        $data = parent::$obj->getall($sql);
        return $data;
    }

    
    public function getChildList($parentid) {
        $sql = "SELECT * FROM ".DB_PREFIX."menu".
                " WHERE parentid='{$parentid}' ORDER BY orders ASC";
        $data = parent::$obj->getall($sql);
        return $data;
    }
    
    
    public function getData($id) {
        $sql = "SELECT * FROM ".DB_PREFIX."menu WHERE id='{$id}'";
        return parent::$obj->fetch_first($sql);
    }
    
    
    public function doAdd($array) {
        $id = parent::$obj->fetch_newid('SELECT MAX(id) FROM '.DB_PREFIX.'menu', 1);
        $array = array_merge(array(
                'id'=>$id,
                'addtime'=>time(),
            ), $array);
        return parent::$obj->insert(DB_PREFIX.'menu', $array);
    }
    
    
    public function doEdit($id, $array) {
        return parent::$obj->update(DB_PREFIX.'menu', $array, "id='{$id}'");
    }
    
    
    public function doDel($id) {
        $res = false;
        $sql = "DELETE FROM ".DB_PREFIX."menu WHERE id='{$id}'";
        $res = parent::$obj->query($sql);
        if (true === $res) {
            
            if ($id > 0) {
                parent::$obj->query("DELETE FROM ".DB_PREFIX."menu WHERE parentid='{$id}'");
            }
        }
        return $res;
    }

    
    public function getOrders($parentid=0) {
        return parent::$obj->fetch_newid("SELECT MAX(orders) FROM ".DB_PREFIX."menu WHERE parentid='{$parentid}'", 1);
    }

    
    public function doUpdate($id, $type) {
        if ($type == 'flagopen') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."menu SET flag='1' WHERE id='{$id}'");
        }
        elseif ($type == 'flagclose') {
            return parent::$obj->query("UPDATE ".DB_PREFIX."menu SET flag='0' WHERE id='{$id}'");
        }
    }
}
?>
