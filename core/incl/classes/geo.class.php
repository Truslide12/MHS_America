<?php
/*************************************
 * Solidium PHP Real Estate Solution *
 * Copyright 2012 Kage-Mykel Edwards *
 *        All Rights Reserved.       *
 *-----------------------------------*
 *  Meta:  Database Singleton Class  *
 *                                   *
 *    /inc/classes/geo.class.php     *
 *************************************/
defined('IGLOO') or die("Twilight Sparkle does not approve."); 
 
final class Geo {
	private static $instance;
	private $_db = array();
	private $_handle = false;
	private $_hasConnected = false;
	private $_curr = array();
	private $_curruser = array();
	private $_curruser_stored = false;
	private $_error = array();
	private $_meth = "select";
    private function __construct()
    {
    }
    public static function summon()
    {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }
	
	public function connect($dbdata) {
		$this->_db = $dbdata;
		$this->_hasConnected = false;
		$this->_handle = @mysql_connect($this->_db['host'], $this->_db['user'], $this->_db['pass']);
		if($this->_handle === false){$this->throwError("FAILED TO CONNECT TO MYSQL SERVER");}else{
			$db_sele = @mysql_select_db($this->_db['database'],$this->_handle);
			if(!$db_sele){$this->_hasConnected = false;}else{$this->_hasConnected = true;}
		}
		return $this->_hasConnected;
	}
	
	public function throwError($err) {
		$this->_error[] = $err;
	}
	
	public function storeUser($id) {
		if($this->_hasConnected != true || $this->_curruser_stored == true){return false;}
		$result = $this->select_one()->from("users")->where("id='".$id."'")->execute("fetchArray");
		if(!is_array($result)) {
			$this->throwError("USER COULD NOT BE FOUND");
			return self::$instance;
		}
		$this->_curruser = $result;
		$this->_curruser_stored = true;
	}
	
	public function getUser() {
		if($this->_curruser_stored == true) {
			return $this->_curruser;
		}else{
			return false;
		}
	}
	
	public function select($sel = "*") {
		if($this->_hasConnected != true){return self::$instance;}
		$this->_meth = "select";
		$this->_curr = array();
		$this->_curr['select'] = $sel;
		$this->_curr['perfect'] = false;
		$this->_curr['from'] = $this->_db['table_prefix']."data";
		return self::$instance;
	}
	
	public function select_one($sel = "*") {
		if($this->_hasConnected != true){return self::$instance;}
		$this->_meth = "select";
		$this->_curr = array();
		$this->_curr['select'] = $sel;
		$this->_curr['perfect'] = false;
		$this->_curr['limit'] = 1;
		$this->_curr['from'] = $this->_db['table_prefix']."data";
		return self::$instance;
	}

	public function select_perfect($sel = "*") {
		if($this->_hasConnected != true){return self::$instance;}
		$this->_meth = "select";
		$this->_curr = array();
		$this->_curr['select'] = $sel;
		$this->_curr['perfect'] = true;
		$this->_curr['from'] = $this->_db['table_prefix']."data";
		return self::$instance;
	}

	public function delete($sel = "") {
		if($this->_hasConnected != true){return self::$instance;}
		$this->_meth = "delete";
		$this->_curr = array();
		$this->_curr['delete'] = $sel;
		$this->_curr['from'] = $this->_db['table_prefix']."data";
		return self::$instance;
	}
	
	public function from($frm) {
		if($this->_hasConnected != true){return self::$instance;}
		if($this->_meth == "select" && trim($this->_curr['select']) != "") {
			$this->_curr['from'] = $this->_db['table_prefix'].$frm;
		}elseif($this->_meth == "delete") {
			$this->_curr['from'] = $this->_db['table_prefix'].$frm;
		}else{
			$this->_curr = array();
		}
		return self::$instance;
	}

	public function pull($frm) {
		if($this->_hasConnected != true){return self::$instance;}
		$this->_meth = "select";
		$this->_curr = array();
		$this->_curr['select'] = "*";
		$this->_curr['from'] = $this->_db['table_prefix']."data";
		return self::$instance;
	}
	
	public function where($whr) {
		if($this->_hasConnected != true){return self::$instance;}
		if(isset($this->_curr['where']) && $this->_curr['where'] != ""){$this->_curr['where'] .= " AND ".$whr;return self::$instance;}
		if(($this->_meth == "select" && trim($this->_curr['select']) != "" && trim($this->_curr['from']) != "") || ($this->_meth == "update" && strlen($this->_curr['fieldsets']) >= 10) || ($this->_meth == "delete" && trim($this->_curr['from']) != "")) {
			$this->_curr['where'] = $whr;
		}else{
			$this->_curr = array();
		}
		return self::$instance;
	}
	
	public function limit($limt) {
		if($this->_hasConnected != true){return self::$instance;}
		if($this->_meth == "select" && trim($this->_curr['select']) != "" && trim($this->_curr['from']) != "") {
			if(is_int($limt) && $limt > 0){$this->_curr['limit'] = $limt;}
		}else{
			$this->_curr = array();
		}
		return self::$instance;
	}
	
	public function trim_value(&$value) 
	{ 
		$value = trim($value);
	}
	
	public function isCatchAll() {
		if($this->_hasConnected != true){return self::$instance;}
		$dsels = explode(",",$this->_curr['select']);
		array_walk($dsels, 'trim_value');
		return in_array("*",$dsels);
	}
	
	public function order($fld, $odr) {
		if($this->_hasConnected != true){return self::$instance;}
		if($this->_meth == "select" && trim($this->_curr['select']) != "" && trim($this->_curr['from']) != "" && (strpos($this->_curr['select'], $fld) !== false || $this->isCatchAll() == true)) {
			$this->_curr['order_by'] = $fld;
			switch(strtolower($odr)) {
				case "asc":
				case "ascending":
				case "up":
					$this->_curr['order'] = "ASC";
					break;
				case "desc":
				case "descending":
				case "down":
				default:
					$this->_curr['order'] = "DESC";
					break;
			}
		}else{
			unset($this->_curr['order_by']);
			unset($this->_curr['order']);
			$this->throwError("ORDER BY ignored due to inconsistency");
		}
		return self::$instance;
	}
	
	public function insert_into($tabl) {
		if($this->_hasConnected != true){return self::$instance;}
		$this->_meth = "insert";
		$this->_curr = array();
		$this->_curr['insert'] = $this->_db['table_prefix']."data";
		return self::$instance;
	}
	
	public function update($tabl) {
		if($this->_hasConnected != true){return self::$instance;}
		$this->_meth = "update";
		$this->_curr = array();
		$this->_curr['update'] = $this->_db['table_prefix']."data";
		return self::$instance;
	}
	
	public function set($flds, $vals) {
		if($this->_hasConnected != true){return self::$instance;}
		if($this->_meth == "insert" && trim($this->_curr['insert']) != "" && !$this->_curr['values']) {
			if(is_array($flds) && is_array($vals) && count($flds) == count($vals)){
				$this->_curr['fields'] = $flds;
				$this->_curr['values'] = $vals;
			}elseif(is_string($flds) && is_string($vals) && trim($flds) != "" && trim($vals) != "") {
				$fldsa = array();
				$fldsa[] = $flds;
				$valsa = array();
				$valsa[] = $vals;
				$this->_curr['fields'] = $fldsa;
				$this->_curr['values'] = $valsa;
			}else{
				$this->throwError("THE FIELDS AND VALUES SUPPLIED ARE NOT ACCEPTABLE");
				return self::$instance;
			}
			$i = 0;
			foreach($this->_curr['values'] as $value){
				$this->_curr['values'][$i] = str_replace("'", "\\'",$value);
				$i++;
			}
			$this->_curr['fieldsets'] = " SET (".implode(",", $this->_curr['fields']).") VALUES ('".implode("','",$this->_curr['values'])."')";
		}elseif($this->_meth == "update" && trim($this->_curr['update']) != "" && !$this->_curr['values']) {
			if(is_array($flds) && is_array($vals) && count($flds) == count($vals)){
				$this->_curr['fields'] = $flds;
				$this->_curr['values'] = $vals;
			}elseif(is_string($flds) && is_string($vals) && trim($flds) != "" && trim($vals) != "") {
				$fldsa = array();
				$fldsa[] = $flds;
				$valsa = array();
				$valsa[] = $vals;
				$this->_curr['fields'] = $fldsa;
				$this->_curr['values'] = $valsa;
			}else{
				$this->throwError("THE FIELDS AND VALUES SUPPLIED ARE NOT ACCEPTABLE");
				return self::$instance;
			}
			$this->_curr['fieldsets'] = " SET ";
			$cntt = count($this->_curr['values']);
			for($i = 0 ; $i < $cntt ; $i++){
				//$this->_curr['values'][$i] = mysqli_real_escape_string($this->_handle, $this->_curr['values'][$i]);
				$this->_curr['fieldsets'] .= $this->_curr['fields'][$i]." = '".str_replace("'","\\'",$this->_curr['values'][$i])."'";
				if($i < count($this->_curr['values'])-1){$this->_curr['fieldsets'] .= ", ";}
			}
		}else{
			$this->throwError("ONLY INSERT AND UPDATE METHODS CAN SET VALUES");
		}
		return self::$instance;
	}
	
	public function execute($res = "") {
		if($this->_hasConnected != true){return self::$instance;}
		if($this->_meth == "select" && trim($this->_curr['select']) != "" && trim($this->_curr['from']) != "") {
			$query = "SELECT ".$this->_curr['select']." FROM ".$this->_curr['from'];
			if($this->_curr['where'] != ""){$query .= " WHERE ".$this->_curr['where'];}
			if(is_int($this->_curr['limit']) && (int) $this->_curr['limit'] > 0){$query .= " LIMIT ".$this->_curr['limit'];}
			$ress = mysql_query($query, $this->_handle);
			unset($query);
			$select_perfect = $this->_curr['perfect'];
			$this->_curr = array();
			if($res == "fetchArray"){
				$final_array = array();
				while($row = mysql_fetch_array($ress)) {
					$final_array[] = $row;
				}
				if($select_perfect == false){
					if(count($final_array) == 1) {
						$beep_array = $final_array[0];
						unset($final_array);
						$final_array = $beep_array;
					}
				}
				return $final_array;
			}elseif($res == "returnResource") {
				return $ress;
			}
		}elseif($this->_meth == "insert" && trim($this->_curr['insert']) != "" && trim($this->_curr['fieldsets']) != "") {
			$query = "INSERT INTO ".$this->_curr['insert'].$this->_curr['fieldsets'];
			$ress = mysql_query($query, $this->_handle);
			unset($query);
			$this->_curr = array();
			if(!$ress) {$return = false;}else{$return = true;}
			if($res == "returnId") {
				if($return == true){return mysql_insert_id($this->_handle);}else{return false;}
			}else{
				return $return;
			}
		}elseif($this->_meth == "update" && trim($this->_curr['update']) != "" && trim($this->_curr['fieldsets']) != "") {
			$query = "UPDATE ".$this->_curr['update'].$this->_curr['fieldsets'];
			if($this->_curr['where'] != ""){$query .= " WHERE ".$this->_curr['where'];}
			$ress = mysql_query($query, $this->_handle);
			unset($query);
			$this->_curr = array();
			if(!$ress) {$return = false;}else{$return = true;}
			return $return;
		}elseif($this->_meth == "delete" && trim($this->_curr['from']) != "" && (trim($this->_curr['where']) != "" || trim($this->_curr['delete']) == "allowdrop")) {
			$query = "DELETE FROM ".$this->_curr['from'];
			if($this->_curr['where'] != ""){$query .= " WHERE ".$this->_curr['where'];}
			if(is_int($this->_curr['limit']) && (int) $this->_curr['limit'] > 0){$query .= " LIMIT ".$this->_curr['limit'];}
			$ress = mysql_query($query, $this->_handle);
			unset($query);
			if(!$ress) {$return = false;}else{$return = true;}
			return $return;
		}else{
			$this->_curr = array();
		}
		return false;
	}
	
	public function retrieveErrors() {
		return $this->_error;
	}
	
	public function getHandle() {
		return $this->_handle;
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
