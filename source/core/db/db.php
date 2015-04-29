<?php
require 'db_config.php';

//数据库操作
$db = mysql_connect($Host,$DbaUser,$DbaPassword);
$db_selected = mysql_select_db($Database,$db);
//$dada = "insert into tool values (NULL,$tname,$ttype,$tintro,$tuse)";
mysql_query('set names utf8',$db);
//
$know_result = mysql_query("select * from tool");
$know_rows = mysql_num_rows($know_result);
//
$rec_result = mysql_query("select * from recommend_tool");
$rec_rows = mysql_num_rows($rec_result);
//哒哒语录
$yulu_result = mysql_query("select * from quot");
$yulu_rows = mysql_num_rows($yulu_result);
mysql_close($db);
?>