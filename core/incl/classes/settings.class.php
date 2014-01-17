<?php
/*************************************
 * Solidium PHP Real Estate Solution *
 * Copyright 2012 Kage-Mykel Edwards *
 *        All Rights Reserved.       *
 *-----------------------------------*
 *  Meta:  Settings Singleton Class  *
 *                                   *
 *  /inc/classes/settings.class.php  *
 *************************************/
defined('IGLOO') or die("Twilight Sparkle does not approve."); 
 
final class Settings {
	private static $instance;
	private $_hasInitialized = false;
	private $_settings = array();
    private function __construct()
    {
    }
    public static function summon($sets = null)
    {
        if (!isset(self::$instance) || is_array($sets)) {
            $className = __CLASS__;
            self::$instance = new $className;
			self::$instance->_settings = $sets;
        }
        return self::$instance;
    }
	
	public function set($fld, $val) {
		if(!$this->_settings[$fld]) $this->_settings[$fld] = $val;
	}

	public function get($field) {
		return $this->_settings[$field];
	}

	public function export() {
		return $this->_settings;
	}
	
	/* Clone / Wakeup */
	public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
    public function __wakeup()
    {
        trigger_error('Unserializing is not allowed.', E_USER_ERROR);
    }
}

?>
