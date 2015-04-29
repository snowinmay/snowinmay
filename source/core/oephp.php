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
class X{
    
	
	protected static $instance = array();
	
	public static $wrap_admin = array();
	
	public static $wrap_user = array();
    
	
	private static $source_path = array(
		'db' => 'source/core/db/', 
		'util' => 'source/core/util/', 
		'lib' => 'source/core/library/', 
		'plus' => 'source/plugin/', 
		'ac' => 'source/control/admincp/', 
		'am' => 'source/model/admincp/', 
		'uc' => 'source/control/usercp/', 
		'um' => 'source/model/usercp/', 
		'ic' => 'source/control/index/', 
		'im' => 'source/model/index/', 
        'plugin' => 'source/plugin/', 
	);	

	
    public static $obj			= NULL;
	
	public static $urlpath		= NULL;
	
	public static $cfg			= array();
	
	public static $urlsuffix	= 'php';
    
    public static $tplpath = 'tpl/templets/';
    
    public static $skinpath = NULL;
   
    
	private static function _dbConnect() {
		$db_class_path = self::getClassPath('mysql', 'db');
		require_once($db_class_path);
		self::$obj = new mysqlClass();
		self::$obj->connect(DB_HOST, DB_USER, DB_PASS, DB_DATA, DB_CHARSET, DB_PCONNECT, true);
	}

	
	private static function _runTPL() {
		require_once BASE_ROOT.'./source/core/tpl.php';
        TPL::__run();
	}

	
	public static function runTime() {
		return "<div align='center'><p style='font-size:10px; font-family:Arial, Helvetica, sans-serif; line-height:120%;color:#999999'>Processed in ".XRunTime::display()." second(s) , ".self::$obj->querynum." queries</p></div>";
	}

	
	public static function loadUtil($packname) {
		if (!empty($packname)) {
			$class_path = self::getStaticPath($packname, 'util');
			if (file_exists($class_path)) {
				require_once($class_path);
			}
		}
	}

	
	public static function loadLib($packname) {
		if (!empty($packname)) {
			$class_path = self::getStaticPath($packname, 'lib');
			if (file_exists($class_path)) {
				require_once($class_path);
			}
		}
	}
	
	private static function getStaticPath($class_name, $type){
		$class_path = self::$source_path[$type] . 'static.' .$class_name . '.php';
		$class_path = BASE_ROOT . $class_path;
		return $class_path;
	}

	
	public static function import($name, $type) {
		$class_path = self::getClassPath($name, $type);
		$class_name = self::getClassName($name);
		if (!file_exists($class_path)) {
			echo('file class.'. $name . '.php is not exist!');
			die();
		}
		if (!isset(self::$instance['class'][$class_name])) {
			require_once($class_path);
			if (!class_exists($class_name)) {
				echo('class' . $class_name . ' is not exist!');
				die();
			}
			$my_class = new $class_name;
			self::$instance['class'][$class_name] = $my_class;
		}
		return self::$instance['class'][$class_name];
	}
	
	
	private static function getClassPath($class_name, $type) {
		$class_path = self::$source_path[$type] . 'class.' .$class_name . '.php';
		$class_path = BASE_ROOT . $class_path;
		return $class_path;
	}
	
	
	private static function getClassName($class_name) {
		return $class_name . 'Class';
	}

	
	public static function model($model_name, $type) {
		$model_path = self::getModelPath($model_name, $type);
		$model_name = self::getModelName($model_name, $type);
		if (!file_exists($model_path)) {
			echo('Model file '. $model_name . '.php is not exist!');
			die();
		}
		if (!isset(self::$instance['model'][$model_name])) {
			require_once($model_path);
			if (!class_exists($model_name)) {
				echo('Model class ' . $model_name . ' is not exist!');
				die();
			}
			$my_model = new $model_name;
			self::$instance['model'][$model_name] = $my_model;
		}
		return self::$instance['model'][$model_name];
	}
	
	private static function getModelPath($model_name, $type) {
		$model_path = self::$source_path[$type] . 'model.' .$model_name . '.php';
		$model_path = BASE_ROOT . $model_path;
		return $model_path;
	}
	
	
	private static function getModelName($model_name, $type) {
		
		if ($type == 'im') {
			return $model_name.'IModel';
		}
		
		elseif ($type == 'um') {
			return $model_name.'UModel';
		}
		
		else {
			return $model_name.'AModel';
		}
	}
    
 	
     public static function importPlugin() {
        self::loadLib('option');
        $active_plugins = XOption::get('active_plugins');
        if ($active_plugins && is_array($active_plugins)) {
        	foreach($active_plugins as $plugin) {
        		if(true === XValid::isPlugin($plugin)) {
        			include_once(BASE_ROOT.self::$source_path['plugin'].$plugin.'/'.$plugin.'.php');
        		}
        	}
        }
     }
     
     
     private static function _assembleConfig () {
        self::loadLib('assemble');
        XAssemble::__init();
     }
     
	
	public static function __run() {
		self::$urlpath	= PATH_URL;
		self::_dbConnect();
        self::_assembleConfig();
        self::_runTPL();
	}
    
}
    

function get_timezone($timeline) {
    X::loadLib('option');
    $data = XOption::get('site_base');
    if (!empty($data)) {
        $timezone = intval($data['timezone']);
        return ($timeline+ ($timezone*3600));
    }
    else {
        return $timeline;
    } 
}
?>
