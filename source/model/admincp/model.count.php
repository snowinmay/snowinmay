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
class countAModel extends X {
    
    public function getCount($type) {
        $sql = "SELECT COUNT(*) AS my_count";
        if ($type == 'article') {
            $sql .= " FROM ".DB_PREFIX."article";
        }
        elseif ($type == 'product') {
            $sql .= " FROM ".DB_PREFIX."product";
        }
        elseif ($type == 'photo') {
            $sql .= " FROM ".DB_PREFIX."photo";
        }
        elseif ($type == 'download') {
            $sql .= " FROM ".DB_PREFIX."download";
        }
        elseif ($type == 'hr') {
            $sql .= " FROM ".DB_PREFIX."hr";
        }
        elseif ($type == 'about') {
            $sql .= " FROM ".DB_PREFIX."about";
        }
        $count = parent::$obj->fetch_count($sql);
        return $count;
    }
}
?>
