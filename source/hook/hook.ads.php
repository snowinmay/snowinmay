<?php
/**
 * [OECMS] (C)2012-2099 OEdev,Inc.
 * <E-Mail：phpcoo@qq.com>
 * Url http://www.phpcoo.com
 *     http://www.oephp.com
 * Update 2013.11.19
*/
if(!defined('IN_OECMS')) {
	exit('OECMS Access Denied');
}

function get_zone($idmark = '') {
    
    if (true === XValid::isSpChar($idmark)) {
        
        
        $model_zone = X::model('ads', 'im');
        return $model_zone->getZone($idmark);
        
        unset($model_zone);

    }
}


function get_ads($idmark = '') {
    if (true === XValid::isSpChar($idmark)){
        
         $model_ads = X::model('ads', 'im');
        return $model_ads->getAds($idmark);
        unset($model_ads);

    }
}
?>
