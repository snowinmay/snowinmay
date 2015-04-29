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
        $searchsql = "";
        
        $model = parent::model('friendlink', 'am');
        list($total, $data) = $model->getList(array(
            'page'=>$this->page,
            'pagesize'=>$this->pagesize,
            'searchsql'=>$searchsql,
        ));
        unset($model);
        
        $url = XRequest::getPhpSelf();
        $url .= '?c=friendlink';
        $var_array = array(
            'page'=>$this->page,
            'nextpage'=>$this->page+1,
            'prepage'=>$this->page-1,
            'pagecount'=>ceil($total/$this->pagesize),
            'pagesize'=>$this->pagesize,
            'total'=>$total,
            'showpage'=>XPage::admin($total, $this->pagesize, $this->page, $url, 10),
            'friendlink'=>$data,
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'friendlink.tpl');
	}
    
    
    public function action_add() {
        
        $model = parent::model('friendlink', 'am');
        $orders = $model->getOrders();
        unset($model);
        
        $var_array = array(
            'orders'=>$orders,
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'friendlink.tpl');
    }
    
    
    public function action_edit() {
        $id = $this->_validID();
        
        $model = parent::model('friendlink', 'am');
        $data = $model->getData($id);
        unset($model);
        if (empty($data)) {
            XHandle::halt('对不起，读取数据不存在！', '', 1);
        }
        else {
            $var_array = array(
                'friendlink'=>$data,
                'id'=>$id,
            );
            TPL::assign($var_array);
            TPL::display($this->cptpl.'friendlink.tpl');
        }
    }
    
    
    public function action_saveadd() {
        $args = $this->_validAdd();
        
        $model = parent::model('friendlink', 'am');
        $result = $model->doAdd($args);
        unset($model); 
        if (true === $result) {
            $this->log('friendlink_add', '', 1);
            XHandle::halt("添加成功", $this->cpfile.'?c=friendlink', 0);
        }
        else {
            $this->log('friendlink_add', '', 0);
            XHandle::halt('添加失败', '', 1);
        }
	}
    
    
    public function action_saveedit() {
        list($id, $args) = $this->_validEdit();
        
        $model = parent::model('friendlink', 'am');
        $result = $model->doEdit($id, $args);
        unset($model);
        if (true === $result) {
            $this->log('friendlink_edit', "id={$id}", 1);
            XHandle::halt("编辑成功", $this->cpfile.'?c=friendlink', 0);
        }
        else {
            $this->log('friendlink_edit', "id={$id}", 0);
            XHandle::halt('编辑失败', '', 1);
        }
    }
    
    
    public function action_del() {
        $array_id = $this->_validArrayID();
        
        $model = parent::model('friendlink', 'am');
        for($ii=0; $ii<count($array_id); $ii++){
            $id = intval($array_id[$ii]);
            $result = $model->doDel($id);            
        }
        unset($model);
        if (true === $result) {
            $this->log('friendlink_del', "id={$array_id}", 1);
            XHandle::halt("删除成功", $this->cpfile.'?c=friendlink', 0);
        }
        else {
            $this->log('friendlink_del', "id={$array_id}", 0);
            XHandle::halt('删除失败', '', 1);
        }  
    }

    
    public function action_update() {
        $args = XRequest::getGpc(array('id', 'type'));
        
        $model = parent::model('friendlink', 'am');
        $model->doUpdate(intval($args['id']), trim($args['type']));
        unset($model);
    }

    
    
    private function _validAdd() {
        $args = XRequest::getGpc(array(
            'url', 'name', 'orders', 'flag', 'remark',
        ));
        $url = XRequest::getArgs('url', '', false);
        if (empty($args['name'])) {
            XHandle::halt('网站名称不能为空', '', 1);
        }
        if (empty($args['url'])) {
            XHandle::halt('网站URL不能为空', '', 1);
        }
        $args['orders'] = intval($args['orders']);
        $args['flag'] = intval($args['flag']);
        return $args;
    }
    
    
    private function _validEdit() {
        $id = $this->_validID();
        $args = XRequest::getGpc(array(
            'url', 'name', 'orders', 'flag', 'remark',
        ));
        $url = XRequest::getArgs('url', '', false);
        if (empty($args['name'])) {
            XHandle::halt('网站名称不能为空', '', 1);
        }
        if (empty($args['url'])) {
            XHandle::halt('网站URL不能为空', '', 1);
        }
        $args['orders'] = intval($args['orders']);
        $args['flag'] = intval($args['flag']);
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
