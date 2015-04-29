<?php
    //创建smarty对象
    require '../source/core/db/db.conn.smarty.php';  
    require_once '../source/core/libs/Smarty.class.php';    

    $smarty = new Smarty;//建立smarty实例对象$smarty
    $smarty -> caching = false;//是否使用缓存
    $smarty -> template_dir="../tpl/templets/default";  //指定模版存放目录
    $smarty -> compile_dir = "..tpl/_compiled";//设置编译目录
    $smarty -> cache_dir = "../tpl/_caches";//缓存文件夹
            //修改左右边界符号
            $smarty -> left_delimiter="<{";
            $smarty -> right_delimiter="}>";

            //
            $db = db::getInstance();
    $categories = $db->select('oecmspre_category',array());
    $works = $db->select('oecmspre_product',array());
    $time_diff = 604800;//7Day
    $time_now = strtotime(date('Y-m-d H:i:s',time()));//7Day
             //print_r($categories);
                // echo 'now:'.strtotime(date('Y-m-d H:i:s',time()));
                // echo '<br />';
                // echo 'add:'.strtotime('2015-04-21 00:00:00');
                // echo '<br />';
                // echo 'add:'.strtotime('2015-04-28 00:00:00');
                // echo '<br />';
                //  print_r($works);
    //exit();

    $smarty -> assign("categories",$categories);
    $smarty -> assign("works",$works);
    $smarty -> assign("time_diff",$time_diff);
    $smarty -> assign("time_now",$time_now);
    
            $smarty -> display("works.tpl");
?>