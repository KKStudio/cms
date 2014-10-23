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

		$class = '\App\\' . $name;

		self::$instances[$name] = new $class;

		return self::$instances[$name];

	}

}

class TestModule extends Module { 

	public function test() {
		return 'test';
	}

}