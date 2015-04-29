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
class XUrl extends X{
    
    public static function getCategoryUrl($module, $cid, $catalog) {
        $url = '';
        if (parent::$cfg['urlsuffix'] == 'html') {
            $url = PATH_URL.$catalog.'/';
        }
        else {
            $url = PATH_URL.'index.php?c='.$module.'&cid='.$cid;
        }
        return $url;
    }    
    
    
    public static function getContentUrl($module, $catalog, $id) {
        if (parent::$cfg['urlsuffix'] == 'php') {
            return PATH_URL.'index.php?c='.$module.'&a=detail&id='.$id;
        }
        else {
            return PATH_URL.$catalog.'/'.$id.'.html';
        }
    }
    
    
    public static function getUri() {
        $uri_info = array();
        $uri = self::_requestUri();
        $uri = str_ireplace(
            array('http://', 'index.php/'), 
            array('', ''), 
            $uri
        );
        #访问PHP动态页
        if (strpos($uri, 'index.php?')) {
        }
        else {
            #URI处理
            if (substr_count(OECMS_ROOT, '/') > 1) {
                $uri = str_ireplace(OECMS_ROOT, '', $uri);
                $uri = '/'.$uri;
            }
            if (false === strpos($uri, '/')) {
                $uri = $uri.'/';
            }
            #分解
            $uri_array = explode('/', $uri);
            $uri_count = count($uri_array);
            $uri_first = @$uri_array[1];
            $uri_lastitem = @$uri_array[$uri_count-1];
            
            if (empty($uri_first) || $uri_first == 'index.php') {
                $uri_info = array(
                    'c'=>'index',
                    'a'=>'run',
                );
            }
            
            else {
                if (false === XValid::isSpChar($uri_first)) {
                    self::echo404();
                }
                if ($uri_count > 3) {
                    self::echo404();
                }
                #栏目首页
                if (empty($uri_lastitem)) {
                    if ($uri_first == 'guestbook') {
                        $uri_info = array(
                            'module'=>'guestbook',
                            'c'=>'guestbook',
                            'a'=>'run',
                        );
                    }
                    else {
                        $cata_data = self::_getCatalog($uri_first);
                        $uri_info = array(
                            'catalog'=>$uri_first,
                            'module'=>$cata_data['modalias'],
                            'c'=>$cata_data['modalias'],
                            'a'=>'run',
                            'cid'=>$cata_data['catid'],
                        );
                    }
                }
                #列表和内容
                else {
                    if (preg_match("/^page_(\d+)\.html$/", $uri_lastitem, $uri_matches)) {
                        
                        $cata_data = self::_getCatalog($uri_first);
                        $uri_info = array(
                            'catalog'=>$uri_first,
                            'module'=>$cata_data['modalias'],
                            'c'=>$cata_data['modalias'],
                            'a'=>'list',
                            'cid'=>intval($cata_data['catid']),
                            'page'=>intval($uri_matches[1]),
                        );
                    }
                    elseif (preg_match("/^(\d+)\.html$/", $uri_lastitem, $uri_matches)) {
                        
                        $cata_data = self::_getCatalog($uri_first);
                        $uri_info = array(
                            'catalog'=>$uri_first,
                            'module'=>$cata_data['modalias'],
                            'c'=>$cata_data['modalias'],
                            'a'=>'detail',
                            'id'=>intval($uri_matches[1]),
                        );
                    }
                    else {
                        self::echo404();
                    }
                }
            }
            
        }
        return $uri_info;
    }
    
    
    private static function _getCatalog($name) {
        $data = NULL;
        if (true === XValid::isSpChar($name)) {
            $sql = "SELECT `catid`, `modalias`, `dirname` FROM ".DB_PREFIX."category".
                    " WHERE `dirname`='{$name}'";
            $rows = parent::$obj->fetch_first($sql);
            if (!empty($rows)) {
                $data = $rows;
            }
            else {
                self::echo404();
            }
            unset($sql, $rows);  
        }
        else {
            self::echo404();
        }
        return $data;
    }
    
    
    private static function _requestUri(){
        $_uri = null;
        if (isset($_SERVER['REQUEST_URI'])) {
            $_uri = $_SERVER['REQUEST_URI'];
        }
        else {
            if (isset($_SERVER['argv'])) {
                $_uri = $_SERVER['PHP_SELF'] .(empty($_SERVER['argv']) ? '' : ('?'. $_SERVER['argv'][0]));
            }
            else {
                $_uri = $_SERVER['PHP_SELF'] .(empty($_SERVER['QUERY_STRING']) ? '' : ('?'. $_SERVER['QUERY_STRING']));
            }
        }
        return $_uri;
    }
    
    
    public static function echo404() {
        @header("http/1.1 404 not found");
        @header("status: 404 not found");
        die();
    }
}
?>
