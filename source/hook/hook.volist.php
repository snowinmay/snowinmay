<?php
/**
 * [OECMS] (C)2012-2099 OEdev,Inc.
 * <E-Mail：service@phpcoo.com>
 * Url http://www.phpcoo.com
 *     http://www.oephp.com
 * Update 2014.04.03
*/
if(!defined('IN_OECMS')) {
	exit('OECMS Access Denied');
}

function vo_list($extracts) {
    $params = XHandle::buildTagArray($extracts);
    if (!empty($params)) {
        @extract($params);
        
		$mod = strtolower(trim($params['mod']));
		
		$type = strtolower(trim($params['type']));
		
		$where = XFilter::filterSql(trim($params['where']));
		
		$orderby = XFilter::filterSql(trim($params['orderby']));
		
		$num = intval($params['num']);
		
		$catid = intval($params['catid']);
		
        $value	= intval($params['value']);
        #limit参数
        $limit = empty($params['limit']) ? '' : XFilter::filterSql(trim($params['limit']));
        
        #文章模块
        if ($mod == 'article') {
			$model_article = X::model('article', 'im');
			return $model_article->getVolist($where, $orderby, $num, $limit);
			unset($model_article);
		}
        #产品模块
        elseif ($mod == 'product') {
			$model_product = X::model('product', 'im');
			return $model_product->getVolist($where, $orderby, $num, $limit);
			unset($model_product);
		}
        #图库模块
        elseif ($mod == 'photo') {
			$model_photo = X::model('photo', 'im');
			return $model_photo->getVolist($where, $orderby, $num, $limit);
			unset($model_photo);
        }
        #下载模块
        elseif ($mod == 'download') {
			$model_download = X::model('download', 'im');
			return $model_download->getVolist($where, $orderby, $num, $limit);
			unset($model_download);
        }
        #招聘模块
        elseif ($mod == 'hr') {
			$model_hr = X::model('hr', 'im');
			return $model_hr->getVolist($where, $orderby, $num, $limit);
			unset($model_hr);
        }
        #单页模块
        elseif ($mod == 'about') {
			$model_about = X::model('about', 'im');
			return $model_about->getVolist($where, $orderby, $num, $limit);
			unset($model_about);
        }
        #栏目广告 2014.02.21
        elseif ($mod == 'categoryads') {
            $m_ads = X::model('ads', 'im');
            return $m_ads->getCategoryAds($catid, $limit);
            unset($m_ads);
        }
        #前台导航 2014.04.01
        elseif ($mod == 'menu') {
            $m_menu = X::model('menu', 'im');
            return $m_menu->getVolist($where, $orderby, $num, $limit);
            unset($m_menu);
        }
        #友情链接 2014.04.02
        elseif ($mod == 'friendlink') {
            $m_link = X::model('friendlink', 'im');
            return $m_link->getVolist($where, $orderby, $num, $limit);
            unset($m_link);
        }
	}
}
?>
