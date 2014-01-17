<?php
/*************************************
 * Solidium PHP Real Estate Solution *
 * Copyright 2012 Kage-Mykel Edwards *
 *        All Rights Reserved.       *
 *-----------------------------------*
 *   Meta:   Locale Singleton Class  *
 *                                   *
 *   /inc/classes/locale.class.php   *
 *************************************/
defined('IGLOO') or die("Twilight Sparkle does not approve."); 
 
final class Locale {
	private static $instance;
	private $_subregions = array();
	private $_locale = array();
	private $_languages = array();
	private $_hasInitialized = false;
	private $_ff_subregions = array();
	private $_ff_locale = array();
	private $_ff_languages = array();
    private function __construct()
    {
    }
    public static function summon()
    {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
			$initchk = self::$instance->initialize();
			if(!$initchk) {
				unset($_locale);
				unset($_subregions);
				unset(self::$instance);
				return false;
			}
        }
        return self::$instance;
    }
	
	public function initialize($locale = "united-states") {	
		if(!defined('IS_ADMINCP')) {
			$nub = "./";
		}else{
			$nub = "./";
		}
		if(!file_exists($nub."incl/locale/".$locale.".locale.php")) {
			return false;
		}
		require($nub."incl/locale/".$locale.".locale.php");
		$this->_locale = $nation;
		$this->_subregions = $subregions;
		$this->_hasInitialized = true;
		return true;
	}

	public function allocate($locale = "united-states") {
		if(is_array($this->_ff_locale[$locale])) {
			return $locale;
		}
		if(!defined('IS_ADMINCP')) {
			$nub = "./";
		}else{
			$nub = "../";
		}
		if(!file_exists($nub."incl/locale/".$locale.".locale.php")) {
			return false;
		}
		require($nub."incl/locale/".$locale.".locale.php");
		$this->_ff_locale[$locale] = $nation;
		$this->_ff_subregions[$locale] = $subregions;
		return $locale;
	}
	
	public function get($name, $ff = false) {
		if($ff != false){
			return $this->_ff_locale[$ff][$name];
		}else{
			return $this->_locale[$name];
		}
	}

	public function subregions($ff = false) {
		if($ff){
			return $this->_ff_subregions[$ff];
		}else{
			return $this->_subregions;
		}
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
