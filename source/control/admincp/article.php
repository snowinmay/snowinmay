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
    
    
	private $_comeurl = NUll;
    private $_urlitem = NULL;
    
    private $tid = NULL;
    
    private $scatid = NULL;
    
    private $stitle = NULL;
    
    private $modtitle = NULL;
    
    private $modalias = NULL;
    
    private function _getItems() {
        $this->tid = XRequest::getInt('tid');
        if ($this->tid<1) {
            XHandle::halt('对不起，模块一级栏目丢失，请从左边菜单模块点击进入。', '', 1);
        }
        else {
            $m = parent::model('category', 'am');
            $moddata = $m->getCatName($this->tid);
            $this->modtitle = $moddata['catname'];
            $this->modalias = $moddata['modalias'];
            unset($m);
        }
        $this->scatid = XRequest::getInt('scatid');
        $this->stitle = XRequest::getGpc('stitle');
        $this->_urlitem = "tid=".$this->tid."&scatid=".$this->scatid."&stitle=".urlencode($this->stitle)."";
        $this->_comeurl = $this->_urlitem."&page=".$this->page."";
    }

	
    public function action_run() {
        $this->checkAuth('article_volist');
        $this->_getItems();
        $searchsql = "";
        $searchsql .= " AND v.treeid='".intval($this->tid)."'";
        
        if ($this->scatid>0) {
            $m = parent::model('category', 'am');
            $childs = $m->getChildIDs($this->scatid);
            if (!empty($childs)) {
                $searchsql .= " AND v.catid IN (".$childs.$this->scatid.")";
            }
            else {
                $searchsql .= " AND v.catid='".$this->scatid."'";
            }
            unset($m);
        }
        if (!empty($this->stitle)) {
            $searchsql .= " AND v.title LIKE '%".strtolower($this->stitle)."%'";
        }
        $model = parent::model('article', 'am');
        list($total, $data) = $model->getList(array('page'=>$this->page, 'pagesize'=>$this->pagesize, 'searchsql'=>$searchsql));
        
        $url = XRequest::getPhpSelf();
        $url .= '?c=article&'.$this->_urlitem;
        parent::loadLib('mod');
        $category_select = XMod::selectNodeEnableChilds($this->tid, $this->scatid ,'scatid', '所有分类');
        $var_array = array(
            'page'=>$this->page,
            'nextpage'=>$this->page+1,
            'prepage'=>$this->page-1,
            'pagecount'=>ceil($total/$this->pagesize),
            'pagesize'=>$this->pagesize,
            'total'=>$total,
            'showpage'=>XPage::admin($total, $this->pagesize, $this->page, $url, 10),
            'urlitem'=>$this->_urlitem,
            'comeurl'=>$this->_comeurl,
            'tid'=>$this->tid,
            'stitle'=>$this->stitle,
            'article'=>$data,
            'category_select'=>$category_select,
            'modtitle'=>$this->modtitle,
        );
        unset($model);
		TPL::assign($var_array);
		TPL::display($this->cptpl.'article.tpl');
	}
    
    
    public function action_add() {
        $this->checkAuth('article_add');
        $this->_getItems();
        
        
        parent::loadLib('mod');
        $model = parent::model('modattr', 'am');
        $modattr = $model->getAttrList($this->modalias, $this->tid);
        unset($model);
        foreach($modattr as $key=>$value){
            
            if ($value['inputtype'] == 'radio') {
                $modattr[$key]['attr_select'] = XMod::attrRadioBox('attr_'.$value['aid'], $value['attrvalue']);
            }
            
            elseif ($value['inputtype'] == 'checkbox') {
                $modattr[$key]['attr_select'] = XMod::attrCheckBox('attr_'.$value['aid'], $value['attrvalue']);
            }
            
            elseif ($value['inputtype'] == 'select') {
                $modattr[$key]['attr_select'] = XMod::attrOptions('attr_'.$value['aid'], $value['attrvalue']); 
            }
            else {
                $modattr[$key]['attr_select'] = '';
            }
        }        
        $var_array = array(
            'category_select'=>XMod::selectNodeEnableChilds($this->tid, $this->scatid, 'catid'),
            'modtitle'=>$this->modtitle,
            'tid'=>$this->tid,
            'scatid'=>$this->scatid,
            'timeline'=>time(),
            'modattr'=>$modattr,
        );
        TPL::assign($var_array);
        TPL::display($this->cptpl.'article.tpl');
    }
    
    
    public function action_edit() {
        $this->checkAuth('article_edit');
        $id = XRequest::getInt('id');
        $this->_validID($id);
        $this->_getItems();
        $model = parent::model('article', 'am');
        list($data, $attr) = $model->getData($id);
        if (empty($data)) {
            XHandle::halt('对不起，读取数据不存在！', '', 1);
        }
        else {

            
            parent::loadLib('mod');
            $model = parent::model('modattr', 'am');
            $modattr = $model->getAttrList($this->modalias, $this->tid);
            foreach($modattr as $key=>$value){
                $extvalue = '';
                $extvalue = $model->getAttrExtValue($this->modalias, $value['aid'], $id);
                
                if ($value['inputtype'] == 'radio') {
                    $modattr[$key]['attr_select'] = XMod::attrRadioBox('attr_'.$value['aid'], $value['attrvalue'], $extvalue);
                }
                
                elseif ($value['inputtype'] == 'checkbox') {
                    $modattr[$key]['attr_select'] = XMod::attrCheckBox('attr_'.$value['aid'], $value['attrvalue'], $extvalue);
                }
                
                elseif ($value['inputtype'] == 'select') {
                    $modattr[$key]['attr_select'] = XMod::attrOptions('attr_'.$value['aid'], $value['attrvalue'], $extvalue); 
                }
                else {
                    $modattr[$key]['attr_select'] = '';
                }
                $modattr[$key]['extvalue'] = $extvalue;
            } 
            $var_array = array(
                'article'=>$data,
                'id'=>$id,
                'page'=>$this->page,
                'comeurl'=>$this->_comeurl,
                'category_select'=>XMod::selectNodeEnableChilds($this->tid, $data['catid'], 'catid'),
                'modtitle'=>$this->modtitle,
                'tid'=>$this->tid,
                'timeline'=>time(),
                'modattr'=>$modattr,
            );
            TPL::assign($var_array);
            TPL::display($this->cptpl.'article.tpl');
        }
        unset($model);
    }
    
    
    public function action_saveadd() {
        $this->checkAuth('article_add');
        $this->_getItems();
        list($args, $attrs) = $this->_validAdd();
        $model = parent::model('article', 'am');
        $result = $model->doAdd($args, $attrs);
        unset($model);
        if (true === $result) {
            $this->log('article_add', '', 1);
            XHandle::halt('添加成功', $this->cpfile.'?c=article&a=add&tid='.$this->tid.'&scatid='.$args['catid'], 0);
        }
        else {
            $this->log('article_add', '', 0);
            XHandle::halt('添加失败', '', 1);
        }
        
	}
    
    
    public function action_saveedit() {
        $this->checkAuth('article_edit');
        $this->_getItems();
        list($id, $args, $attrs) = $this->_validEdit();
        $model = parent::model('article', 'am');
        $result = $model->doEdit($id, $args, $attrs);
        unset($model);
        if (true === $result) {
            $this->log('article_edit', "id={$id}", 1);
            XHandle::halt('编辑成功', $this->cpfile.'?c=article&'.$this->_comeurl.'', 0);
        }
        else {
            $this->log('article_edit', "id={$id}", 1);
            XHandle::halt('编辑失败', '', 1);
        }
    }
    
    
    public function action_del() {
        $this->checkAuth('article_del');
        $this->_getItems();
        $array_id = XRequest::getArray('id');
        $this->_validID($array_id);
        $model = parent::model('article', 'am');
        for($ii=0; $ii<count($array_id); $ii++){
            $id = intval($array_id[$ii]);
            $result = $model->doDel($id);            
        }
        unset($model);
        
        if (true === $result) {
            $this->log('article_del', "id={$array_id}", 1);
            XHandle::halt('删除成功', $this->cpfile.'?c=article&tid='.$this->tid.'', 0);
        }
        else {
            $this->log('article_del', "id={$array_id}", 0);
            XHandle::halt('删除失败', '', 1);
        }
         
    }
    
    
    public function action_update() {
        $this->checkAuth('article_edit');
        $args = XRequest::getGpc(array('id', 'type'));
        $model = parent::model('article', 'am');
        $model->doUpdate(intval($args['id']), trim($args['type']));
        unset($model);
    }
    
    
    private function _validAdd() {
        $args = XRequest::getGpc(array(
            'treeid', 'catid', 'title', 'subtitle', 'author', 'source',
            'thumbfiles', 'uploadfiles', 'summary',
            'tags', 'metakeyword', 'metadescription',
            'istop', 'elite', 'flag', 'addtime', 
            'hits', 'linktype', 'linkurl', 'purview', 'tplname',
        ));
        $content = XRequest::getArgs('content', '', false);
        
        if (empty($args['title'])) {
            XHandle::halt('请填写标题', '', 1);
        }
        if (!empty($args['tplname'])) {
            if (false === XValid::isSpChar($args['tplname'])) {
                XHandle::halt('模板文件格式不正确', '', 1);
            }
        }
        $args['treeid'] = intval($args['treeid']);
        $args['catid'] = intval($args['catid']);
        $args['istop'] = intval($args['istop']);
        $args['elite'] = intval($args['elite']);
        $args['flag'] = intval($args['flag']);
        $args['hits'] = intval($args['hits']);
        $args['linktype'] = intval($args['linktype']);
        $args['purview'] = intval($args['purview']);
        $args['addtime'] = strtotime(trim(str_replace('&nbsp;', ' ', $args['addtime'])));
        if ($args['catid'] == 0) {
            $args['catid'] = $args['treeid'];
        }
        $args['content'] = $content;
        return array($args, $this->_getAttrValue());
    }
    
    
    private function _validEdit() {
        $id = XRequest::getInt('id');
        $args = XRequest::getGpc(array(
            'treeid', 'catid', 'title', 'subtitle', 'author', 'source',
            'thumbfiles', 'uploadfiles', 'summary',
            'tags', 'metakeyword', 'metadescription',
            'istop', 'elite', 'flag', 'addtime',
            'hits', 'linktype', 'linkurl', 'purview', 'tplname', 
            
        ));
        $content = XRequest::getArgs('content', '', false);
        if ($id<1) {
            XHandle::halt('ID丢失', '', 1);
        }
        
        if (empty($args['title'])) {
            XHandle::halt('请填写标题', '', 1);
        }
        if (!empty($args['tplname'])) {
            if (false === XValid::isSpChar($args['tplname'])) {
                XHandle::halt('模板文件格式不正确', '', 1);
            }
        }
        $args['treeid'] = intval($args['treeid']);
        $args['catid'] = intval($args['catid']);
        $args['istop'] = intval($args['istop']);
        $args['elite'] = intval($args['elite']);
        $args['flag'] = intval($args['flag']);
        $args['hits'] = intval($args['hits']);
        $args['linktype'] = intval($args['linktype']);
        $args['purview'] = intval($args['purview']);
        $args['addtime'] = strtotime(trim(str_replace('&nbsp;', ' ', $args['addtime'])));
        if ($args['catid'] == 0) {
            $args['catid'] = $args['treeid'];
        }
        $args = array_merge($args, array('content'=>$content));
        return array($id, $args, $this->_getAttrValue());
    }
    
    
    private function _validID($id) {
        if (empty($id)) {
            XHandle::halt('ID丢失，请选择要操作的ID', '', 1);
        }
    }
    
    
    private function _getAttrValue() {
        $array = array();
        
        $m = parent::model('modattr', 'am');
        $attrdata = $m->getAttrList($this->modalias, $this->tid);
        unset($m);
        foreach($attrdata as $key=>$value) {
            
            if ($value['inputtype'] == 'checkbox') {
                $arr = XRequest::getArray('attr_'.$value['aid']);
                $array_val = '';
                for($ii=0; $ii<count($arr); $ii++){
                    $array_val .= trim($arr[$ii]).',';
                }
                if (!empty($array_val)) {
                    $array_val = substr($array_val, 0, (strlen($array_val)-1));
                }
                $array[] = array(
                    'aid'=>$value['aid'],
                    'extvalue'=>$array_val,
                );
            }
            else {
                $array[] = array(
                    'aid'=>$value['aid'],
                    'extvalue'=>XRequest::getArgs('attr_'.$value['aid']),
                );
            }
        }
        return $array;      
    }
}
?>
