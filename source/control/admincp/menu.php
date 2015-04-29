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
    
    public function action_run() {
		TPL::display($this->cptpl.'menu.tpl');
	}
    
    
    public function action_add() {
        $rootid = XRequest::getInt('rootid');
        
        $model = parent::model('menu', 'am');
        $orders = $model->getOrders($rootid);
        unset($model);
        
        $var_array = array(
            'orders'=>$orders,
            'rootid'=>$rootid,
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'menu.tpl');
    }
    
    
    public function action_edit() {
        $id = $this->_validID();
        
        $model = parent::model('menu', 'am');
        $data = $model->getData($id);
        unset($model);
        if (empty($data)) {
            XHandle::halt('对不起，读取数据不存在！', '', 1);
        }
        else {
            $var_array = array(
                'menu'=>$data,
                'id'=>$id,
            );
            TPL::assign($var_array);
            TPL::display($this->cptpl.'menu.tpl');
        }
    }
    
    
    public function action_saveadd() {
        $args = $this->_validAdd();
        
        $model = parent::model('menu', 'am');
        $result = $model->doAdd($args);
        unset($model); 
        if (true === $result) {
            $this->log('menu_add', '', 1);
            XHandle::halt("添加成功", $this->cpfile.'?c=menu', 0);
        }
        else {
            $this->log('menu_add', '', 0);
            XHandle::halt('添加失败', '', 1);
        }
	}
    
    
    public function action_saveedit() {
        list($id, $args) = $this->_validEdit();
        
        $model = parent::model('menu', 'am');
        $result = $model->doEdit($id, $args);
        unset($model);
        if (true === $result) {
            $this->log('menu_edit', "id={$id}", 1);
            XHandle::halt("编辑成功", $this->cpfile.'?c=menu', 0);
        }
        else {
            $this->log('menu_edit', "id={$id}", 0);
            XHandle::halt('编辑失败', '', 1);
        }
    }
    
    
    public function action_del() {
        $array_id = $this->_validArrayID();
        
        $model = parent::model('menu', 'am');
        for($ii=0; $ii<count($array_id); $ii++){
            $id = intval($array_id[$ii]);
            $result = $model->doDel($id);            
        }
        unset($model);
        if (true === $result) {
            $this->log('menu_del', "id={$array_id}", 1);
            XHandle::halt("删除成功", $this->cpfile.'?c=menu', 0);
        }
        else {
            $this->log('menu_del', "id={$array_id}", 0);
            XHandle::halt('删除失败', '', 1);
        }  
    }

    
    public function action_update() {
        $args = XRequest::getGpc(array('id', 'type'));
        
        $model = parent::model('menu', 'am');
        $model->doUpdate(intval($args['id']), trim($args['type']));
        unset($model);
    }

    
    
    private function _validAdd() {
        $args = XRequest::getGpc(array(
            'parentid', 'name', 'orders', 'target', 'currentmark', 'flag',
        ));
        $url = XRequest::getArgs('url', '', false);
        if (empty($args['name'])) {
            XHandle::halt('导航名称不能为空', '', 1);
        }
        if (empty($url)) {
            XHandle::halt('导航链接不能为空', '', 1);
        }
        $args['parentid'] = intval($args['parentid']);
        $args['orders'] = intval($args['orders']);
        $args['target'] = intval($args['target']);
        $args['flag'] = intval($args['flag']);
        $args['url'] = $url;
        return $args;
    }
    
    
    private function _validEdit() {
        $id = $this->_validID();
        $args = XRequest::getGpc(array(
            'parentid', 'name', 'orders', 'target', 'currentmark', 'flag',
        ));
        $url = XRequest::getArgs('url', '', false);
        if (empty($args['name'])) {
            XHandle::halt('导航名称不能为空', '', 1);
        }
        if (empty($url)) {
            XHandle::halt('导航链接不能为空', '', 1);
        }
        $args['parentid'] = intval($args['parentid']);
        $args['orders'] = intval($args['orders']);
        $args['target'] = intval($args['target']);
        $args['flag'] = intval($args['flag']);
        $args['url'] = $url;
        return array($id, $args);
    }

    
    private function _validID() {
        $id = XRequest::getInt('id');
        if ($id < 1) {
            XHandle::halt('对不起，ID丢失。', '', 1);
        }
        else {
            return $id;
        }
    }

    
    private function _validArrayID() {
        $ids = XRequest::getArray('id');
        if (empty($ids)) {
            XHandle::halt("对不起，ID错误！", '', 1);
        }
        return $ids;
    }

    
}
?>
