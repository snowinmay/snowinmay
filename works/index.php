<?php    
   
    require '../source/core/db/db.conn.smarty.php';  
    require_once '../source/core/libs/Smarty.class.php';    
    require '../source/core/include_file.php';

    $db = db::getInstance();
    $categories = $db->select('oecmspre_category',array());
    $works = $db->select('oecmspre_product',array());
    $time_diff = 604800;//7Day
    $time_now = strtotime(date('Y-m-d H:i:s',time()));//7Day

    $smarty -> assign("categories",$categories);
    $smarty -> assign("works",$works);
    $smarty -> assign("time_diff",$time_diff);
    $smarty -> assign("time_now",$time_now);
    
    $smarty -> display("works.tpl");
?>