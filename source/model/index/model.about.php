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
class aboutIModel extends X {
    
    public function getVolist($where='', $orderby='', $num=0, $limit='') {
        $sql = "SELECT v.*, c.catname".
                " FROM ".DB_PREFIX."about AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.flag='1'";
        $sql .= !empty($where) ? ' AND '.$where : '';
        $sql .= !empty($orderby) ? ' '.$orderby : ' ORDER BY c.orders DESC';
        if (!empty($limit)) {
            $sql .= " LIMIT {$limit}";
        }
        else {
            if ($num>0) {
                $sql .= " LIMIT {$num}";
            }
        }
        $data = parent::$obj->getall($sql);
        return $this->_handleList($data);
    }
    
    
    public function getOneData($id) {
        $data = array();
        $sql = "SELECT v.* ,m.tpldetail AS mod_tpldetail".
                " FROM ".DB_PREFIX."about AS v".
                " LEFT JOIN ".DB_PREFIX."module AS m ON v.modalias=m.alias".
                " WHERE v.abid='{$id}'";
        $data = parent::$obj->fetch_first($sql);
        if (!empty($data)) {
            #URL路由
            $data['url'] = XUrl::getContentUrl('about', 'about', $data['abid']);
            #图片处理
            if (empty($data['thumbfiles'])) {
                $data['thumbfiles'] = parent::$urlpath.'tpl/static/images/nopic_s.jpg';
            }
            else {
                if (substr($data['thumbfiles'], 0, 15) == 'data/attachment') {
                    $data['thumbfiles'] = parent::$urlpath.$data['thumbfiles'];
                }
            }
            if (empty($data['uploadfiles'])) {
                $data['uploadfiles'] = parent::$urlpath.'tpl/static/images/nopic.jpg';
            }
            else {
                if (substr($data['uploadfiles'], 0, 15) == 'data/attachment') {
                    $data['uploadfiles'] = parent::$urlpath.$data['uploadfiles'];
                }
            }
            
            $m_category = parent::model('category', 'im');
            $catdata = $m_category->getOneData(intval($data['catid']));
            unset($m_category);

            
            $m_link = parent::model('relatedlink', 'im');
            $data['content'] = $m_link->tagContent('about', $data['content']);
            unset($m_link);
        }
        return array($data, $catdata);
    }
    
    
    private function _handleList($data) {
        if (!empty($data)) {
            $i = 1;
            foreach($data as $key=>$value) {            
                #URL路由
                $data[$key]['url'] = XUrl::getContentUrl('about', 'about', $value['abid']);
                #图片处理
                if (empty($value['thumbfiles'])) {
                    $data[$key]['thumbfiles'] = parent::$urlpath.'tpl/static/images/nopic_s.jpg';
                }
                else {
                    if (substr($value['thumbfiles'], 0, 15) == 'data/attachment') {
                        $data[$key]['thumbfiles'] = parent::$urlpath.$value['thumbfiles'];
                    }
                }
                if (empty($value['uploadfiles'])) {
                    $data[$key]['uploadfiles'] = parent::$urlpath.'tpl/static/images/nopic.jpg';
                }
                else {
                    if (substr($value['uploadfiles'], 0, 15) == 'data/attachment') {
                        $data[$key]['uploadfiles'] = parent::$urlpath.$value['uploadfiles'];
                    }
                }
                $data[$key]['i'] = $i;
                $i = ($i+1); 
            }
        } 
        return $data;
    }   
}
?>
