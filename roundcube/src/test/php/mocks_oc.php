<?php
class OC{
	/**
	 * Associative array for autoloading. classname => filename
	 */
	public static $CLASSPATH = array();

}

class OC_L10N{

	public function __construct($app) {
	}


	public function t($text, $parameters = array()) {
	}
}

class OC_App{
	/**
	 * Get the directory for the given app.
	 * If the app is defined in multiple directories, the first one is taken. (false if not found)
	 */
	public static function getAppPath($appid) {

		return $appid;
	}
}

function p($print){
}
