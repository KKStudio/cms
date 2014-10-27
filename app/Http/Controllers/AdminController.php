<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Repositories\ModuleRepository;
use App\Http\Repositories\VisitRepository;

/**
 * @Controller(prefix="admin")
 * @Middleware("auth")
 */

class AdminController extends Controller {

	/**
	 * @Get("/")
	 */

	public function index(VisitRepository $visits) {

		return view('admin.index')->with('visits', $visits->count());

	}

}