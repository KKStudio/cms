<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Repositories\ThemeRepository;

class ThemeController extends Controller {

	protected $repo;

	public function __construct(ThemeRepository $repo)
	{
		$this->repo = $repo;
	}

	public function themes() 
	{
		$themes =  $this->repo->all();

		return \View::make('admin.themes')->with('themes', $themes);
	}

	public function theme($slug) 
	{
		$theme =  $this->repo->get($slug);

		return \View::make('admin.theme')->with('theme', $theme);

	}

	public function customize($slug) 
	{
		$theme =  $this->repo->get($slug);

		$data = \Request::except('_token');

		$theme->colors = json_encode($data);
		$theme->save();

		\Flash::success('Theme has been edited.');

		return \Redirect::back();

	}

	public function changeTheme() 
	{
		$field = 'theme';

		if(\App\Settings::value($field)) {

			$object = \App\Settings::where('key', $field)->first();

			if($object) {

				$object->value = \Request::get($field);
				$object->save();

			}

		} else {

			\App\Settings::create([

				'key' => $field,
				'value' => \Request::get($field)

			]);

		}

		\Flash::success('Theme changed.');

		return \Redirect::back();

	}

	public function edit() 
	{

	}

}
