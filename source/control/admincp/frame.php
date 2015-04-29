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
class control extends adminbase {
    private $mod = NULL;
    
	public function action_run() {
		TPL::display($this->cptpl.'frame.tpl');
	}
    
    
    public function action_top(){
        $var_array = array(
            'adminname'=>parent::$wrap_admin['adminname'],
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'frm_top.tpl');
    }
    
    
    public function action_drag(){
        TPL::display($this->cptpl.'frm_drag.tpl');
    }
    
    
    public function action_left(){
        $this->mod = XRequest::getArgs('mod');
        
        $model = parent::model('category', 'am');
        $data = $model->getForAdmMenu();
        unset($model);
        $var_array = array(
            'mod'=>$this->mod,
            'category'=>$data,
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'frm_menu.tpl');
    }
    
    
    public function action_main(){
        $model = parent::model('count', 'am');
        $count = array(
            'article'=>$model->getCount('article'),
            'product'=>$model->getCount('product'),
            'photo'=>$model->getCount('photo'),
            'download'=>$model->getCount('download'),
            'hr'=>$model->getCount('hr'),
            'about'=>$model->getCount('about'),
        );
        unset($model);
        
        $model = parent::model('index', 'am');
        $data = $model->doGetSysData();
        unset($model);
        
        $var_array = array(
            'count'=>$count,
            'sysdata'=>$data,
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'frm_main.tpl');
    }
    
    
    public function action_footer(){
        TPL::display($this->cptpl.'frm_footer.tpl');
    }

    
    public function action_mynav() {
        
        $model = parent::model('mynav', 'am');
        $data = $model->getAllList();
        unset($model);
        
        $var_array = array(
            'mynav'=>$data,
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'frm_mynav.tpl');
    }
    
}
?>
