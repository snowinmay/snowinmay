<?php
/**
 * [OECMS] (C)2012-2099 OEdev,Inc.
 * <E-Mail：service@phpcoo.com>
 * Url http://www.phpcoo.com
 *     http://www.oephp.com
 * Update 2014.04.03
*/
//载入主文件
require_once 'source/core/run.php';
//获取参数
$c = XRequest::getGpc('c');
$a = XRequest::getGpc('a');
$c = empty($c) ? 'login' : $c;
$a = empty($a) ? 'run' : $a;
//载入插件
if (($c=='login' && $a=='login') || ($c=='login' && $a=='logout')){
}
else {
    X::importPlugin();
}
//允许运行的module
if(in_array($c, 
    array(
        'login', 'frame', 'admin', 'setting', 'plugin', 'log', 'seo', 
        'skin', 'templet', 'htmllabel', 'relatedlink', 'zone',
        'myads', 'module', 'category', 'output', 'modattr', 'about', 'article',
        'product', 'photo', 'download', 'hr', 'upload', 'ajax',
		'guestbook', 'mynav', 'menu', 'friendlink', 
    )
    )) {
	//载入controller
	$control_base = BASE_ROOT.'./source/control/adminbase.php';
    $hoook_base = BASE_ROOT.'./source/control/apphook.php';
	$control_path = BASE_ROOT.'./source/control/admincp/'.$c.'.php';
	if (!file_exists($control_path)) {
		XHandle::error('Controller file:['.$c.'] is not found!');
	}
	else {
		require_once($control_base);
        require_once($hoook_base);
		require_once($control_path);
		$control = new control();
		$method = 'action_'.$a;
		if(method_exists($control, $method) && $a{0} != '_') {
			$control->$method();
		} else {
			XHandle::error('Controller Action ['.$a.'] not found!');
		}
	}
} 
else {
	XHandle::error('Controller ['.$c.'] is forbiden!');
}

?>