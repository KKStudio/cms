<?php namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * The controllers to scan for route annotations.
	 *
	 * @var array
	 */
	protected $scan = [
		'App\Http\Controllers\HomeController',
		'App\Http\Controllers\AdminController',
		'App\Http\Controllers\Auth\AuthController',
		'App\Http\Controllers\Auth\PasswordController',
	];

	/**
	 * All of the application's route middleware keys.
	 *
	 * @var array
	 */
	protected $middleware = [
		'auth' => 'App\Http\Middleware\Authenticated',
		'auth.basic' => 'App\Http\Middleware\AuthenticatedWithBasicAuth',
		'csrf' => 'App\Http\Middleware\CsrfTokenIsValid',
		'guest' => 'App\Http\Middleware\IsGuest',
		'admin' => 'App\Http\Middleware\AdminMiddleware',
	];

	/**
	 * Called before routes are registered.
	 *
	 * Register any model bindings or pattern based filters.
	 *
	 * @param  Router  $router
	 * @return void
	 */
	public function before(Router $router)
	{	

		$router->get('admin', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\AdminController@index'
		]);

		$router->get('admin/settings', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\SettingsController@index'
		]);

		$router->post('admin/settings', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\SettingsController@update'
		]);

		$router->get('admin/{module}/settings', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\SettingsController@module'
		]);

		$router->post('admin/{module}/settings', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\SettingsController@moduleUpdate'
		]);

		$router->get('admin/themes', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\ThemeController@themes'
		]);

		$router->get('admin/theme/{slug}', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\ThemeController@theme'
		]);

		$router->post('admin/themes/change', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\ThemeController@changeTheme'
		]);

		$router->post('admin/theme/{slug}/customize', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\ThemeController@customize'
		]);

		$router->post('backup', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\BackupController@download'
		]);

		$router->post('password', [
			'middleware' => 'admin',
			'uses' => 'App\Http\Controllers\Auth\PasswordController@change'
		]);

		\View::composer('admin.template', function($view)
		{
			$repo = new \App\Http\Repositories\ModuleRepository;
			$modules = $repo->all();

		    $view->with('modules', $modules);
		});
	}

	/**
	 * Define the routes for the application.
	 *
	 * @return void
	 */
	public function map(Router $router)
	{
		// require app_path('Http/routes.php');
	}

}
