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
class uploadAModel extends X {
    
    public function doSaveUpload($multipart, $module='', $thumbinput='') {
        
        parent::loadLib('option');
        $upload_config = XOption::get('upload_config');
        
        
        $php_upload_maxsize = ini_get('upload_max_filesize');
        if (intval($upload_config['uploadmaxsize'])>$php_upload_maxsize) {
            $upload_config['uploadmaxsize'] = $php_upload_maxsize;
        }
                
        
        $upload = parent::import('upload', 'util');

		
        $params = array(
            'maxSize'=>($upload_config['uploadmaxsize']*1024000)
        );
		
		if (in_array($module, array('article', 'product', 'photo', 'hr', 'img'))) {
			$params = array_merge($params, array(
				'allowFileType'=>array('gif', 'jpeg', 'jpg', 'png'),
			));
		}
		if ($module == 'download' || $module == 'attchment') {
			$params = array_merge($params, array(
				'allowFileType'=>array('rar', 'zip', 'tar', 'gz'),
			));
		}
		if (empty($module)) {
			$params = array_merge($params, array(
				'allowFileType'=>array('flv', 'swf', 'gif', 'jpeg', 'jpg', 'png'),
			));
		}

        $info = $upload->upload($multipart, $module, '', $params);
		unset($upload);

        
		parent::loadUtil('image');
        if (is_array($info)) {
            
            if (!empty($thumbinput) && in_array(strtolower($info['ext']), array('jpg', 'jpeg', 'png', 'gif'))) {
                $thumbfiles = $info['source'].'.thumb.jpg';
                XImage::makeThumb(BASE_ROOT.'./'.$info['source'], $module);
                
                if (file_exists(BASE_ROOT.'./'.$thumbfiles)) {
                    $info['thumbfiles'] = $thumbfiles;
                }
                else {
                    $info['thumbfiles'] = $info['source'];
                }
            }
			
			if (in_array(strtolower($info['ext']), array('jpg', 'jpeg', 'png', 'gif'))) {
                if (intval($upload_config['watermarkflag']) == 1) {
                    XImage::makeWaterMark(BASE_ROOT.'./'.$info['source']);
                }
			}
        }
        
        return $info;   
    }
    
}?>
