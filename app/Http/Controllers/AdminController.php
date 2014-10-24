<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Repositories\ModuleRepository;

/**
 * @Controller(prefix="admin")
 * @Middleware("auth")
 */

class AdminController extends Controller {

	/**
	 * @Get("/")
	 */

	public function index() {

		return view('admin.index');

	}

}

\View::composer('admin.template', function($view)
{
	$repo = new ModuleRepository;
	$modules = $repo->all();

    $view->with('modules', $modules);
});