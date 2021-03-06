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
class menuIModel extends X {
    
    public function getVolist($where='', $orderby='', $num=0, $limit='') {
        $sql = "SELECT v.*".
            " FROM ".DB_PREFIX."menu AS v".
            " WHERE 1=1";
        $sql .= !empty($where) ? ' AND '.$where : '';
        $sql .= !empty($orderby) ? ' '.$orderby : ' ORDER BY v.orders ASC';
        if (!empty($limit)) {
            $sql .= " LIMIT {$limit}";
        }
        else {
            if ($num > 0) {
                $sql .= " LIMIT {$num}";
            }
        }
        $data = parent::$obj->getall($sql);
        return $this->_handleList($data);
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
