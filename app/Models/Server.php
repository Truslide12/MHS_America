<?php

namespace App\Models;

use OpenCloud\Rackspace;

class Server {

	protected $_instance;

	protected static $client;
	protected static $servers = array();
	protected static $computes = array();

	protected static $statuses = array(
		'ACTIVE' => 'Active',
		'BUILD' => 'Down',
		'DELETED' => 'Down',
		'ERROR' => 'Down',
		'HARD_REBOOT' => 'Rebooting',
		'MIGRATING' => 'Down',
		'PASSWORD' => 'Reconfiguring',
		'REBOOT' => 'Rebooting',
		'REBUILD' => 'Rebuilding',
		'RESCUE' => 'Recovering',
		'RESIZE' => 'Resizing Data',
		'REVERT_RESIZE' => 'Resizing Data',
		'SUSPENDED' => 'Inactive',
		'UNKNOWN' => 'Unknown'
	);

	public function __construct() {
		self::initialize();
	}

	public static function initialize()
	{
		if(!isset(self::$client)) {
			self::$client = new Rackspace(Rackspace::US_IDENTITY_ENDPOINT, array(
				'username' => 'keystroke',
				'apiKey'   => 'f6a180d9c2e7aeac1b1511dee3d50874'
			));
		}
	}

	public static function compute($location = 'DFW')
	{
		self::initialize();

		if(!isset(self::$computes[$location])) {
			self::$computes[$location] = self::$client->computeService(null, $location);
		}

		return self::$computes[$location];
	}

	public static function select($location, $sid)
	{
		self::initialize();

		if(!isset(self::$servers[$location.'_'.$sid])) {
			self::$servers[$location.'_'.$sid] = self::compute($location)->server($sid);
		}

		return self::$servers[$location.'_'.$sid];
	}

	public static function status($id)
	{
		return self::$statuses[$id];
	}
}