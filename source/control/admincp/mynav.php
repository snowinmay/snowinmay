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
        
        $model = parent::model('mynav', 'am');
        $data = $model->getAllList();
        unset($model);
        
        $var_array = array(
            'mynav'=>$data,
        );
		TPL::assign($var_array);
		TPL::display($this->cptpl.'mynav.tpl');
	}
    
    
    public function action_add() {
        
        $model = parent::model('mynav', 'am');
        $orders = $model->getOrders();
        unset($model);
        
        $var_array = array(
            'orders'=>$orders,
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'mynav.tpl');
    }
    
    
    public function action_edit() {
        $id = $this->_validID();
        
        $model = parent::model('mynav', 'am');
        $data = $model->getData($id);
        unset($model);
        if (empty($data)) {
            XHandle::halt('对不起，读取数据不存在！', '', 1);
        }
        else {
            $var_array = array(
                'mynav'=>$data,
                'id'=>$id,
            );
            TPL::assign($var_array);
            TPL::display($this->cptpl.'mynav.tpl');
        }
    }
    
    
    public function action_saveadd() {
        $args = $this->_validAdd();
        
        $model = parent::model('mynav', 'am');
        $result = $model->doAdd($args);
        unset($model); 
        if (true === $result) {
            $this->log('mynav_add', '', 1);
            XHandle::halt("添加成功<script>var leftiframeid = window.parent.document.getElementById('menu-frame');leftiframeid.src='".$this->cpfile."?c=frame&a=mynav';</script>", $this->cpfile.'?c=mynav', 0);
        }
        else {
            $this->log('mynav_add', '', 0);
            XHandle::halt('添加失败', '', 1);
        }
	}
    
    
    public function action_saveedit() {
        list($id, $args) = $this->_validEdit();
        
        $model = parent::model('mynav', 'am');
        $result = $model->doEdit($id, $args);
        unset($model);
        if (true === $result) {
            $this->log('mynav_edit', "id={$id}", 1);
            XHandle::halt("编辑成功<script>var leftiframeid = window.parent.document.getElementById('menu-frame');leftiframeid.src='".$this->cpfile."?c=frame&a=mynav';</script>", $this->cpfile.'?c=mynav', 0);
        }
        else {
            $this->log('mynav_edit', "id={$id}", 0);
            XHandle::halt('编辑失败', '', 1);
        }
    }
    
    
    public function action_del() {
        $array_id = $this->_validArrayID();
        
        $model = parent::model('mynav', 'am');
        for($ii=0; $ii<count($array_id); $ii++){
            $id = intval($array_id[$ii]);
            $result = $model->doDel($id);            
        }
        unset($model);
        if (true === $result) {
            $this->log('mynav_del', "id={$array_id}", 1);
            XHandle::halt("删除成功<script>var leftiframeid = window.parent.document.getElementById('menu-frame');leftiframeid.src='".$this->cpfile."?c=frame&a=mynav';</script>", $this->cpfile.'?c=mynav', 0);
        }
        else {
            $this->log('mynav_del', "id={$array_id}", 0);
            XHandle::halt('删除失败', '', 1);
        }  
    }

    
    
    private function _validAdd() {
        $args = XRequest::getGpc(array(
            'name', 'orders', 'icon',
        ));
        $url = XRequest::getArgs('url', '', false);
        if (empty($args['name'])) {
            XHandle::halt('导航名称不能为空', '', 1);
        }
        if (empty($url)) {
            XHandle::halt('导航链接不能为空', '', 1);
        }
        $args['orders'] = intval($args['orders']);
        $args['icon'] = intval($args['icon']);
        $args['url'] = $url;
        return $args;
    }
    
    
    private function _validEdit() {
        $id = $this->_validID();
        $args = XRequest::getGpc(array(
            'name', 'orders', 'icon',
        ));
        $url = XRequest::getArgs('url', '', false);
        if (empty($args['name'])) {
            XHandle::halt('导航名称不能为空', '', 1);
        }
        if (empty($url)) {
            XHandle::halt('导航链接不能为空', '', 1);
        }
        $args['orders'] = intval($args['orders']);
        $args['icon'] = intval($args['icon']);
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
