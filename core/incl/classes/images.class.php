<?php

require_once('./incl/classes/PHPImageWorkshop/Exception/ImageWorkshopBaseException.php');
require_once('./incl/classes/PHPImageWorkshop/Exception/ImageWorkshopException.php');
require_once('./incl/classes/PHPImageWorkshop/Core/Exception/ImageWorkshopLayerException.php');
require_once('./incl/classes/PHPImageWorkshop/Core/ImageWorkshopLib.php');
require_once('./incl/classes/PHPImageWorkshop/Core/ImageWorkshopLayer.php');
require_once('./incl/classes/PHPImageWorkshop/ImageWorkshop.php');

final class Images {
	private static $instances = array();
	private $_hasInitialized = false;
	private $_derp = false;
	private $_image_filename = "";
	private $_name = "";
	private $_imgg = ImageWorkshop;
	private function __construct($name,$filename){
		$this->_name = $name;
		if(file_exists($filename)) {
			$this->_imgg = ImageWorkshop::initFromPath($filename);
			$this->_image_filename = $filename;
		}else{
			$this->_imgg = ImageWorkshop::initVirginLayer(75,75);
			$this->_image_filename = "";
		}
	}
	
    public static function summon($name = "", $filename = "")
    {
        if($name != "" && !isset(self::$instances[$name])) {
            self::$instances[$name] = new $className($name,$filename);
        }
		return self::$instances[$name]->getImage();
    }
	
	public function getImage() {
		return $this->_imgg;
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