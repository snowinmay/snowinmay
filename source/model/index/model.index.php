<?php
echo ' ';
 
 if(!defined('IN_OECMS')) {
     exit('OECMS Access Denied');
 }
class indexIModel extends X {
    
    public function getModuleContentUrl($module, $id) {
        
        $url = '';
        if ($module == 'article') {
            $sql = "SELECT v.articleid,c.dirname".
                    " FROM ".DB_PREFIX."article AS v".
                    " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                    " WHERE v.articleid='{$id}'";
        }
        elseif ($module == 'product') {
            $sql = "SELECT v.productid,c.dirname".
                " FROM ".DB_PREFIX."product AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.productid='{$id}'";
        }
        elseif ($module == 'photo') {
            $sql = "SELECT v.photoid,c.dirname".
                " FROM ".DB_PREFIX."photo AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.photoid='{$id}'";
        }
        elseif ($module == 'download') {
            $sql = "SELECT v.downid,c.dirname".
                " FROM ".DB_PREFIX."download AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.downid='{$id}'";
        }
        elseif ($module == 'hr') {
            $sql = "SELECT v.hrid,c.dirname".
                " FROM ".DB_PREFIX."hr AS v".
                " LEFT JOIN ".DB_PREFIX."category AS c ON v.catid=c.catid".
                " WHERE v.hrid='{$id}'";
        }
        elseif ($module == 'about') {

        }

    }
}
?>
