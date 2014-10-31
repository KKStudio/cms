<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Settings;

class SettingsController extends Controller {

	public function index() {

		return \View::make('admin.settings');

	}

	public function update() {

		$fields = \Request::except('_token');

		foreach($fields as $field => $value) {

			if(Settings::value($field)) {

				$object = Settings::where('key', $field)->first();

				if($object) {

					$object->value = \Request::get($field);
					$object->save();

				}

			} else {

				Settings::create([

					'key' => $field,
					'value' => \Request::get($field)

				]);

			}

		}

		\Flash::success('Changes has been saved.');

		return \Redirect::back();

	}

	public function module($name) {

		return \View::make('admin.module')->with('module', ucfirst($name));

	}

	public function moduleUpdate($name) {

		$fields = \Input::except('_token');
		$module = ucfirst($name);

		$settings = m($module)->settings;

		foreach($fields as $key => $value) {

			$settings[$key] = $value;

		}

		\DB::table('kkstudio_modules')->where('name', $module)->update(['settings' => json_encode($settings)]);

		\Flash::success('Changes has been saved.');

		return \Redirect::back();

	}

}
