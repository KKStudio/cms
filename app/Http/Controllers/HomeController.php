<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller {

	/**
	 * @Get("/", as="home")
	 */
	public function index()
	{		
		return v('index');
	}

}