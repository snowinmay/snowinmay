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
class mynavAModel extends X {
    
    public function getList($items) {
        $where      = " WHERE 1=1".$items['searchsql'];
        $start      = ($items['page']-1)*$items['pagesize'];
        $countsql   = "SELECT COUNT(id) FROM ".DB_PREFIX."mynav".$where;
        $total      = parent::$obj->fetch_count($countsql);
        $sql        = "SELECT * FROM ".DB_PREFIX."mynav".
                      $where." ORDER BY orders ASC LIMIT {$start}, ".$items['pagesize']."";
        $array = parent::$obj->getall($sql);
        return array($total, $this->_handleList($array));
    }

    
    public function getAllList() {
        $sql = "SELECT * FROM ".DB_PREFIX."mynav".
                " ORDER BY orders ASC";
        $data = parent::$obj->getall($sql);
        return $this->_handleList($data);
    }
    
    
    public function getData($id) {
        $sql = "SELECT * FROM ".DB_PREFIX."mynav WHERE id='{$id}'";
        return parent::$obj->fetch_first($sql);
    }
    
    
    public function doAdd($array) {
        $id = parent::$obj->fetch_newid('SELECT MAX(id) FROM '.DB_PREFIX.'mynav', 1);
        $array = array_merge(array(
                'id'=>$id,
                'addtime'=>time(),
            ), $array);
        return parent::$obj->insert(DB_PREFIX.'mynav', $array);
    }
    
    
    public function doEdit($id, $array) {
        return parent::$obj->update(DB_PREFIX.'mynav', $array, "id='{$id}'");
    }
    
    
    public function doDel($id) {
        $sql = "DELETE FROM ".DB_PREFIX."mynav WHERE id='{$id}'";
        return parent::$obj->query($sql);
    }

    
    public function getOrders() {
        return parent::$obj->fetch_newid("SELECT MAX(orders) FROM ".DB_PREFIX."mynav", 1);
    }

    
    private function _handleList($data) {
        if (!empty($data)) {
            foreach ($data as $key=>$value) {
                $data[$key]['url'] = str_ireplace('{urlpath}', parent::$urlpath, $value['url']);
            }
        }
        return $data;
    }
}
?>
