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
class relatedlinkIModel extends X {
    
    public function tagContent($mod, $content) {
        if (!empty($content)) {
            $tags = $this->_getRelatedLink($mod);
            if (!empty($tags)) {
                foreach ($tags as $key=>$value) {
                    $content = str_ireplace($value['name'], $value['tag'], $content);
                }
            }
        }
        return $content;
    }

    
    private function _getRelatedLink($mod) {
        $new_data[] = NULL;
        $sql = "SELECT * FROM ".DB_PREFIX."relatedlink WHERE flag='1'";
        if ($mod == 'article') {
            $sql .= " AND article='1'";
        }
        elseif ($mod == 'product') {
            $sql .= " AND product='1'";
        }
        elseif ($mod == 'photo') {
            $sql .= " AND photo='1'";
        }
        elseif ($mod == 'download') {
            $sql .= " AND download='1'";
        }
        elseif ($mod == 'about') {
            $sql .= " AND about='1'";
        }
        $data = parent::$obj->getall($sql);
        foreach ($data as $key=>$value) {
            $tag = NULL;
            $tag = "<a href='".$value['url']."'";
            if ($value['target'] == 2) {
                $tag .= " target='_blank'";
            }
            if ($value['nofollow'] == 1) {
                $tag .= " rel='nofollow'";
            }
            if (!empty($value['color'])) {
                $tag .= " style='color:".$value['color']."'";
            }
            $tag .= ">".$value['linktag']."</a>";
            $new_data[] = array(
                'name'=>$value['linktag'],
                'tag'=>$tag,
            );
        }
        return $new_data;
    }
}
?>
