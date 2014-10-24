<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

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
