<?php
/*************************************
 * Solidium PHP Real Estate Solution *
 * Copyright 2012 Kage-Mykel Edwards *
 *        All Rights Reserved.       *
 *-----------------------------------*
 *  Meta:  Language Singleton Class  *
 *                                   *
 *  /inc/classes/language.class.php  *
 *************************************/
defined('IGLOO') or die("Twilight Sparkle does not approve."); 
 
final class Language {
	private static $instance;
	private $_language = array();
	private $_lang = array();
	private $_hasConnected = false;
    private function __construct()
    {
    }
    public static function summon($lng = array(),$defs = array())
    {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
			self::$instance->_language = $lng;
			self::$instance->_lang = $defs;
			self::$instance->_hasConnected = true;
        }
        return self::$instance;
    }
	
	public function get($name) {
		return $this->_lang[$name];
	}

	public function getProperty($name) {
		return $this->_language[$name];
	}

	public function export() {
		return $this->_lang;
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
