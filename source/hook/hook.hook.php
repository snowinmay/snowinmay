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

function hook_cmd_hook($extract) {
    if (!empty($extract)) {
        @extract($extract);
        
        $mod = trim($extract['mod']);
        
        $type = empty($extract['type']) ? '' : trim($extract['type']);
        
        $value = empty($extract['value']) ? '' : intval($extract['value']);
        if ($mod == 'category') {
            if ($type == 'option') {
                $m_category = X::model('category', 'am');
                return $m_category->getAllTreeOption($value);
                unset($m_category);
            }
            elseif ($type == 'text') {
                $m_category = X::model('category', 'im');
                return $m_category->getCatName($value);
                unset($m_category);
            }
        }

        
        elseif ($mod == 'contenturl') {
            $m_index = X::model('index', 'im');
            return $m_index->getContentUrl($type, $value);
            unset($m_index);
        }

    }
}
TPL::regFunction('hook', 'hook_cmd_hook');
?>
