<?php 
//引用smarty文件
	require_once ('../libs/Smarty.class.php');
//创建smarty对象
	$smarty = new Smarty;//建立smarty实例对象$smarty
	$smarty -> caching = false;//是否使用缓存
	$smarty -> template_dir = "../tpl";//设置模板目录
	$smarty -> compile_dir = "../templates_c";//设置编译目录
	//修改左右边界符号
	$smarty -> left_delimiter="<{";
    $smarty -> right_delimiter="}>";
 ?>