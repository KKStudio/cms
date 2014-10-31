<?php namespace App\Http\Repositories;

use App\Theme as Model;

class ThemeRepository {

	public function all() {

		return Model::orderBy('name')->get();

	}

	public function get($slug) {

		return Model::where('slug', $slug)->first();
		
	}

}