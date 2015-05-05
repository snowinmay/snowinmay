<?php
date_default_timezone_set("PRC"); 
    $smarty = new Smarty;//建立smarty实例对象$smarty
    $smarty -> caching = false;//是否使用缓存
    $smarty -> template_dir="../tpl/templets/default";  //指定模版存放目录
    $smarty -> compile_dir = "../tpl/_compiled";//设置编译目录
    $smarty -> cache_dir = "../tpl/_caches";//缓存文件夹
            //修改左右边界符号
            $smarty -> left_delimiter="<{";
            $smarty -> right_delimiter="}>";

            //
?>
