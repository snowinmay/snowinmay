<?php
/**
 * 首字母大写
 * 
 * @author Prince Yu
 * @time 2013-7-5
 */
    

    function smarty_modifier_mycap($string,$args,$args2){
        return strtoupper(substr($string, 0,1)).strtolower(substr($string,1)).$args.$args2;
    }


?>