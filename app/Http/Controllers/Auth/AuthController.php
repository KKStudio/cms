<?php namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

/**
 * @Middleware("guest", except={"logout"})
 */
class AuthController extends Controller {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Show the application registration form.
	 *
	 * @Get("auth/register")
	 *
	 * @return Response
	 */
	public function showRegistrationForm()
	{
		return view('auth.register');
	}

	/**
	 * Handle a registration request for the application.
	 *
	 * @Post("auth/register")
	 *
	 * @param  RegisterRequest  $request
	 * @return Response
	 */
	public function register(RegisterRequest $request)
	{
		// Registration form is valid, create user...

		$this->auth->login($user);

		return redirect('/');
	}

	/**
	 * Show the application login form.
	 *
	 * @Get("auth/login")
	 *
	 * @return Response
	 */
	public function showLoginForm()
	{
		return view('auth.login');
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @Post("auth/login")
	 *
	 * @param  LoginRequest  $request
	 * @return Response
	 */
	public function login(LoginRequest $request)
	{
		if ($this->auth->attempt($request->only('email', 'password')))
		{

			\Flash::success('Witamy!');
			return \Redirect::to('admin');
		}

		return redirect('/auth/login')->withErrors([
			'email' => 'Niepoprawne dane.',
		])->withInput();
	}

	/**
	 * Log the user out of the application.
	 *
	 * @Get("auth/logout")
	 *
	 * @return Response
	 */
	public function logout()
	{
		$this->auth->logout();

		return redirect('/');
	}

}
