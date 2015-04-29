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
class indexbase extends X {
    public $pagesize = 20;
    public $page = 1;
    #模板文件
    public $smtpl = NULL;
    #Meta容器
    public $metawrap = null;
    
    public function __construct() {
        $path_info = $GLOBALS['path_info'];
        TPL::assign(array('a'=>$GLOBALS['a']));
        if (!empty($path_info) && isset($path_info['page'])) {
            $this->page = intval($path_info['page']);
        }
        else {
            $this->page = intval(XRequest::getArgs('page'));
        }
        if ($this->page<1) {
            $this->page = 1;
        }
        $this->_loadMenu();
    }
    
    
    public function existsTplFile($tplname) {
        $res = false;
        if (!empty($tplname)) {
            $tplfile = parent::$tplpath.$tplname.'.tpl';
            if (file_exists(BASE_ROOT. './'.$tplfile)) {
                $res = true;
            }
        }
        return $res;
    }
    
    
    public function getTPLFile($tplname) {
        $tplfile = parent::$tplpath.$tplname.'.tpl';
        if (!file_exists(BASE_ROOT. './'.$tplfile)) {
            XHandle::halt('模板文件['.$tplfile.']不存在，请检查！', '', 1);
        }
        else {
            return $tplfile;
        }
    }
    
    
    public function getMeta($idmark) {
        $model_seo = parent::model('seo', 'im');
        $data = $model_seo->getOneData($idmark);
        unset($model_seo);
        $this->metawrap = $data;
        return $data;
    }
    
    
    private function _loadMenu() {
        $model_seo = parent::model('seo', 'im');
        $model_seo->loadChLabel();
        unset($model_seo);
    }
}
?>
