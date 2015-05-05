<?php
    require '../source/core/db/db.conn.smarty.php';  
    require_once '../source/core/libs/Smarty.class.php';    
    require '../source/core/include_file.php';

    $db = db::getInstance();
    $htmllabel = $db->select('oecmspre_htmllabel');
    //print_r($htmllabel);
    //exit();
    $arr;
    for ($i=0; $i < count($htmllabel) ; $i++) { 
    	//print_r ($htmllabel[$i][content]);
    	//echo "<br/>";
    	$arr[$htmllabel[$i][labelname]] = $htmllabel[$i][content];
    	//print_r ($arr[$htmllabel[$i][labelname]]);
    }
    // print_r($arr);
    $smarty -> assign('js_arr',json_encode($arr));  
    $smarty -> assign("htmllabel",$arr);
    
    $smarty -> display("resume.tpl");
?>