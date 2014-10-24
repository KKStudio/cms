<?php namespace App\Http\Repositories;

class ModuleRepository {

	public function all() {

		return \DB::table('kkstudio_modules')->orderBy('name', 'asc')->get();

	}

}