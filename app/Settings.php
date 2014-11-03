<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

	protected $table = 'kkstudio_settings';
	protected $guarded  = ['id'];

	private static $cache = null;

	public static function value($key, $default = '') {

		if(self::$cache == null) {

			$settings = Settings::all();

			foreach($settings as $setting) {

				self::$cache[$setting->key] = $setting->value;

			}

		}

		if(isset(self::$cache[$key])) {

			return self::$cache[$key];

		}

		return $default;

	}

}