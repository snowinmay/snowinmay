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
class settingAModel extends X {
    
    public function getOptions($option) {
        parent::loadLib('option');
        return XOption::get($option); 
    }
    
    
    public function doSave($option, $array) {
        $data = serialize($array);
        parent::loadLib('option');
        XOption::updateOption($option, $data);
        return true;
    }
    
    
    public function doUpdate($option, $string){
        $array = array(
            'optionvalue'=>$string,
        );
        $result = parent::$obj->update(DB_PREFIX.'options', $array, "optionname='".$option."'");
        if (true === $result){
            
            $cache = parent::import('cache', 'lib');
            $cache->updateCache('options');
            unset($cache);
            return true;
        }
        else {
            return false;
        } 
    }
    
    
    public function doUpdateCache() {
        $cache = parent::import('cache', 'lib');
        $cache->updateCache();
        unset($cache);
    }
    
    
    public function doRewrite($type='') {
        $res = false;
        $rewrite_name = ".htaccess";
        parent::loadUtil('file');
        if (empty($type)) {
            
            $res = XFile::delFile($rewrite_name);
        }
        
        elseif ($type == 'apache') {
            $rewrite_content = "#OECMS rewrite for apache
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
</IfModule>
            ";
            
            XFile::delFile($rewrite_name);
            XFile::createFile($rewrite_name);
            return XFile::writeFile($rewrite_name, $rewrite_content);
        }
        
        elseif ($type == 'iis') {
            $rewrite_content = "#OECMS rewrite or iis rewrite 3.1
RewriteBase ".OECMS_ROOT."
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?$1 [L]
            ";
            
            XFile::delFile($rewrite_name);
            XFile::createFile($rewrite_name);
            return XFile::writeFile($rewrite_name, $rewrite_content);
        }
        
        elseif ($type == 'nginx') {
            $rewrite_content = "#OECMS rewrite for nginx
location / {
    index index.php;
    if (!-e \$request_filename) {
        rewrite (.*) /index.php break;
    }
}
            ";
            
            XFile::delFile($rewrite_name);
            XFile::createFile($rewrite_name);
            return XFile::writeFile($rewrite_name, $rewrite_content);
        }
        return $res;
    }
     
}
?>
