<?php
if (!defined('IN_OECMS')) {
	exit('OECMS Access Denied');
}
/**
 * @CopyRight  (C)2006-2012 OE Development team Inc.
 * @WebSite    www.phpcoo.com��www.oecms.cn
 * @Author     OE's Team <phpcoo@qq.com>
 * @Brief      OEcms X
 * @Update     2012.02.07
**/
function smarty_modifier_stripslashes($s_content){
	if (!empty($s_content)) {
		$s_content = stripslashes($s_content);
	}
	return $s_content;
}
?>