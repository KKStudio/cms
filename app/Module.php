<?php namespace App;

abstract class Module {

	protected static $instances = [];

	protected function __construct() { }

	/**
	*	Returns module singleton instance
	*	@return Module
	*/

	public static function getInstance($name) {

		if(isset(self::$instances[$name])) {

			return self::$instances[$name];

		}

		self::$instances[$name] = new $name;

		return self::$instances[$name];

	}

	public static function dump(){
		var_dump(self::$instances);
	}

}