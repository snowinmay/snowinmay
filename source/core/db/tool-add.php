<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tool-add</title>
</head>
<body>
	<?php
	//配置文件
	require 'db_config.php';
	$db = mysql_connect($Host,$DbaUser,$DbaPassword);
	$db_selected = mysql_select_db($Database,$db);
	//数据接收
	if ($_POST['submit1']) {
		# code...
		//擅长
		$tname = trim($_POST['tname']);//过滤前后空格
		$ttype = trim($_POST['ttype']);
		$tintro = trim($_POST['tintro']);
		$tuse = trim($_POST['tuse']);
		//数据库操作

		$tool = "insert into tool values (NULL,'$tname','$ttype','$tintro','$tuse')";
		mysql_query('set names utf8',$db);
		mysql_query($tool);
	}
	
	if ($_POST['submit2']) {
		# code...
		//推荐
		$retname = trim($_POST['retname']);//过滤前后空格
		$rettype = trim($_POST['rettype']);
		$retintro = trim($_POST['retintro']);
		//数据库操作

		$retool = "insert into recommend_tool values (NULL,'$retname','$rettype','$retintro')";
		mysql_query('set names utf8',$db);
		mysql_query($retool);
	}

	//哒哒语录
	if ($_POST['submit3']) {
		# code...
		//推荐
		$content = trim($_POST['yuluintro']);//过滤前后空格
		$qtype = trim($_POST['yulutype']);
		$qfrom = trim($_POST['yulufrom']);
		$qother = trim($_POST['yuluoth']);
		//数据库操作

		$yulu = "insert into quot values (NULL,'$content','$qtype','$qfrom','$qother')";
		mysql_query('set names utf8',$db);
		mysql_query($yulu);
	}	

	echo "1 record added";
	mysql_close($db);
	?>
</body>
</html>