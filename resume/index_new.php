<?php 
	require_once ('smartyConfig.php');
	require_once ('argumentsConfig.php');

	/* 获取基本数据类型*/

	$smarty -> assign("is_band",1);//获取字符串


	//指定用哪个模版显示
	$smarty -> display("index.tpl");

 ?>