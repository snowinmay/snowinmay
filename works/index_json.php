<?php
    date_default_timezone_set("PRC"); 
    //创建smarty对象
    require '../source/core/db/db.conn.smarty.php';  
    require_once '../source/core/libs/Smarty.class.php';    

    $smarty = new Smarty;//建立smarty实例对象$smarty
    $smarty -> caching = false;//是否使用缓存
    $smarty -> template_dir="../tpl/templets/default";  //指定模版存放目录
    $smarty -> compile_dir = "../tpl/_compiled";//设置编译目录
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
    $works = json_encode($works); //编码
    print_r ($works) ;
?>