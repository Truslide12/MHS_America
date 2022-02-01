<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");

interface mModule {
	public function summon();
	public function setTemplate($name);
	public function broadcast();
	public function render();
	public function runHook($method);
	public function initialize();
}

interface mListener {
	public function update($module);
}

class Module implements mModule {
	private static $_instance;
	private $_template = "";
	private $_renderer;
	private $_commands = array();
	private $_default_command = "";
	private $_routes = array();
	public $_subpage = "";
	private $_data = array();
	protected $_listeners = array();
	protected $_state;
	private static $_sector;
	private static $_name;
	
	final private function __construct() {}
	
	final public function summon($sector = "frontend", $name = "") {
		if(!isset(self::$_instance)) {
			self::$_sector = $sector;
			self::$_name = $name;
			$classNameOrig = $className = __CLASS__;
			$className .= "_".ucwords($name);
            if(is_subclass_of($className,'Module')) {
				self::$_instance = new $className;
				self::$_instance->_routes['/'] = $className;
				self::$_instance->_routes["/".$name] = $className;
			}else{
				self::$_instance = new $classNameOrig;
				self::$_instance->_routes['/'] = $classNameOrig;
				self::$_instance->_routes["/".$name] = $classNameOrig;
			}
			self::$_instance->_route_prefix = "/".$name;
			self::$_instance->_template = $sector.'_'.$name.'.tpl';
		}
		return self::$_instance;
	}
	final public function name() {
		return self::$_name;
	}
	final public function sector() {
		return self::$_sector;
	}
	final public function attachCommands($admin = false) {
		$d = "./incl/commands/".$this->name();
		if($admin)
			$d = "./incl/commands/admin/".$this->name();
		if(!is_dir($d))
			return self::$_instance;
		$fname = "";
		foreach(array_diff(scandir($d),array('.','..')) as $f){
			if(is_file($d.'/'.$f) && eregi('.command.php$',strtolower($f)) !== false){
				$fname = "Command_".($admin?'Admin_':'').ucwords($this->name())."_".ucwords(strtolower(substr($f,0,strpos($f,'.'))));
				require $d.'/'.$f;
				$this->attach(new $fname);
				$this->addRoute($f);
			}
		}
		return self::$_instance;
	}
	final public static function setRoutePrefix($name) {
		self::$_instance->_route_prefix = $name;
		return self::$_instance;
	}
	final public function route_prefix() {
		if(!$this->_route_prefix) $this->_route_prefix = "/".$this->name();
		return $this->_route_prefix;
	}
	final public function addRoute($name,$path = null) {
		if(!$path) {
			$path = $this->route_prefix()."/".strtolower($name);
		}
		if(!in_array($path, $this->_routes)) {
			$this->_routes[$path] = __CLASS__;
		}
	}
	final public static function routes() {
		return self::$_instance->_routes;
	}
	final public function launchREST() {
		$allowed_methods = array('get','post','put','delete');
		if(!is_string($_SERVER['REQUEST_METHOD'])) die();
        $request_method = strtolower($_SERVER['REQUEST_METHOD']);
		if(!in_array($request_method,$allowed_methods)) die();
		if($request_method != "get") {
			//Toro::serve(self::$_instance->_routes);
			$tokens = array(
				':string' => '([a-zA-Z]+)',
				':number' => '([0-9]+)',
				':alpha'  => '([a-zA-Z0-9-_]+)'
			);
			foreach (self::$_instance->_routes as $pattern => $handler_name) {
				$pattern = strtr($pattern, $tokens);
				if (preg_match('#^/?' . $pattern . '/?$#', $path_info, $matches)) {
					$discovered_handler = $handler_name;
					$regex_matches = $matches;
					break;
				}
			}
			$method = "route_".$request_method;
			$this->$method($matches);
		}
		$this->initialize();
	}
	final public static function setVar($name, $value) {
		self::$_instance->_data[$name] = $value;
		return self::$_instance;
	}
	final public static function getVar($name) {
		return self::$_instance->_data[$name];
	}
	final public function setTemplate($name) {
		$this->_template = $name;
		return self::$_instance;
	}
	final public function getTemplate() {
		return $this->_template;
	}
	final public function attach($listener) {
		$i = array_search($listener, $this->_listeners);
        if ($i === false) {
            $this->_listeners[] = $listener;
        }
	}
	final public function detach($listener) {
		if (!empty($this->_listeners)) {
            $i = array_search($listener, $this->_listeners);
            if ($i !== false) {
                unset($this->_listeners[$i]);
            }
        }
	}
	final public function getState() {
        return $this->_state;
    }
	final public function pushState($state) {
        $this->_state = $state;
        $this->broadcast();
    }
	final public function broadcast() {
		if (!empty($this->_listeners)) {
            foreach ($this->_listeners as $listener) {
                $listener->update($this);
            }
        }
		return self::$_instance;
	}
	final public function plantRenderer($renderer) {
		$this->_renderer = $renderer;
	}
	public function render($template = "") {
		//Toro::serve($this->_routes);
		if($template != "") {
			self::renderer()->display($template);
		}else{
			self::renderer()->display($this->_template);
		}
		return self::$_instance;
	}
	final public function getListeners() {
        return $this->_listeners;
    }
	final public function setCommands($def,$list) {
		if(is_array($list)) {
			$this->_commands = $list;
		}else{
			return self::$_instance;
		}
		if(is_string($def) && in_array($def, $list)) {
			$this->_default_command = $def;
		}else{
			return self::$_instance;
		}
	}
	final public function runCommand() {
		if($_GET['id'] && in_array($_GET['id'], $this->_commands)) {
			$this->_subpage = $_GET['id'];
		}else{
			//Main page
			$this->_subpage = $this->_default_command;
		}
		$this->runHook('command_run');
		$classtouse = "Command_".(($this->sector() == "admin") ? "Admin_":"").ucwords($this->name())."_".ucwords($this->_subpage);
		require_once "./incl/commands/admin/".$this->name()."/".$this->_subpage.".php";
		$this->attach(new $classtouse);
		$this->pushState($this->_subpage);
		return self::$_instance;
	}
	public function initialize() { /* return self::$_instance->initialize(); */ }
	public function route_get() { }
	public function route_post() { }
	final public function runHook($method) {
		$method = 'hook_'.$method;
		if(is_callable(array($this, $method))) {
			$this->$method();
		}
		return self::$_instance;
	}
	final public static function renderer() {
		return self::$_instance->_renderer;
	}
}

class Listener implements mListener {
	final public function __construct($module = null) {
        if (is_object($module) && $module instanceof Module) {
            $module->attach($this);
        }
    }
	final public function update($module) {
        if (method_exists($this, "action_".$module->name()."_".$module->getState())) {
            call_user_func_array(array($this, "action_".$module->name()."_".$module->getState()), array($module));
        }
    }
}

?>