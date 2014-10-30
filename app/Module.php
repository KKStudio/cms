<?php namespace App;

abstract class Module {

	protected static $instances = [];
	public $settings = [];

	protected function __construct() { }

	/**
	*	Returns module singleton instance
	*	@return Module
	*/

	public static function getInstance($name) 
	{
		if(isset(self::$instances[$name])) {

			return self::$instances[$name];

		}

		self::$instances[$name] = new $name;

		$module = (explode('\\', $name));

		$settings = \DB::table('kkstudio_modules')->where('name', $module[3])->first();
		self::$instances[$name]->settings = ($settings) ? json_decode($settings->settings, true) : [];

		return self::$instances[$name];
	}

	public function setting($key, $default = '') {

		if(isset($this->settings[$key])) {

			return $this->settings[$key];

		}

		return $default;

	}

}