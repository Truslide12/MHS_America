<?php
/*************************************
 * Solidium PHP Real Estate Solution *
 * Copyright 2012 Kage-Mykel Edwards *
 *        All Rights Reserved.       *
 *-----------------------------------*
 *    Meta:   Page Singleton Class   *
 *                                   *
 *    /inc/classes/page.class.php    *
 *************************************/
defined('IGLOO') or die("Twilight Sparkle does not approve."); 
 
final class Page {
	private static $instance;
	private $_hasInitialized = false;
	private $_pagename = "";
	private $_module = "";
	private $_page = "";
	private $_pagevars = array('title' => "", 'content' => "");
	private $_title = "";
	private $_content = "";

    private function __construct()
    {
    }
    public static function summon($name = "")
    {
        if ($name != "" && (!isset(self::$instance) || self::$instance->_pagename != $name)) {
            $className = __CLASS__;
            self::$instance = new $className;
			self::$instance->_pagename = $name;
			$names = explode(".", $name, 2);
			self::$instance->_module = $names[0];
			self::$instance->_page = $names[1];
        }
        return self::$instance;
    }

	public function getModule() {
		return self::$instance->_module;
	}

	public function getPage() {
		return self::$instance->_page;
	}

	public function getTitle() {
		return self::$instance->_pagevars['title'];
	}

	public function put($texttoput) {
		self::$instance->_pagevars['content'] .= $texttoput;
	}

	public function ret() {
		return self::$instance->_pagevars['content'];
	}

	public function set($var,$val) {
		self::$instance->_pagevars[$var] = $val;
	}

	public function get($var) {
		return self::$instance->_pagevars[$var];
	}
	
	public function retrieve() {
		return self::$instance->_pagevars;
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
