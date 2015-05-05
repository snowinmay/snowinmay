<?php
/**
 * [OECMS] (C)2012-2099 OEdev,Inc.
 * <E-Mail：service@phpcoo.com>
 * Url http://www.phpcoo.com
 *     http://www.oephp.com
 * Update 2014.04.03
*/
#载入文件
require_once 'source/core/run.php';
$c = XRequest::getGpc('c');
$a = XRequest::getGpc('a');
$c = empty($c) ? 'index' : $c;
$a = empty($a) ? 'run' : $a;
$path_info = XUrl::getUri();
if (!empty($path_info)) {
    if (isset($path_info['c'])) {
        $c = $path_info['c'];
    }
    if (isset($path_info['a'])) {
        $a = $path_info['a'];
    }
}
#Controller白名单
if (!in_array($c, 
    array(
        'index', 'article', 'product', 'photo', 'download', 
        'hr', 'about', 'guestbook', 'search', 
    ))) {
	XHandle::error('Controller ['.$c.'] is forbiden!');
}
#初始化插件
X::importPlugin();
#载入Controller文件
$control_base = BASE_ROOT.'./source/control/indexbase.php';
$hoook_base = BASE_ROOT.'./source/control/apphook.php';
$control_path = BASE_ROOT.'./source/control/index/'.$c.'.php';
if (!file_exists($control_path)) {
	XHandle::error('Controller file:['.$c.'] not found!');
}
else {
	require_once($control_base);
    require_once($hoook_base);
	require_once($control_path);
	$control = new control();
	$method = 'control_'.$a;
	if(method_exists($control, $method) && $a{0} != '_') {
		$control->$method();
	} 
    else {
		XHandle::error('Controller Action ['.$a.'] not found!');
    }
    unset($control, $method);
}
?>