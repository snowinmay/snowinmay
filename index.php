<?php    
   
    require 'source/core/db/db.conn.smarty.php';  
    require_once 'source/core/libs/Smarty.class.php';    
    require 'source/core/include_file.php';
    $smarty -> template_dir="tpl/templets/default";  //指定模版存放目录
    $smarty -> compile_dir = "tpl/_compiled";//设置编译目录
    $db = db::getInstance();
    $categories = $db->select('oecmspre_category',array());
    $arr=array();
    for ($i=0,$j=0; $i < count($categories) ; $i++) { 
        if ($categories[$i][treeid] == "12") {
            $arr[$j] = $categories[$i];
            $j++;
        }
    }
    //print_r($arr);
    $smarty -> assign("arr",$arr);   
    $smarty -> display("index.tpl");
?>