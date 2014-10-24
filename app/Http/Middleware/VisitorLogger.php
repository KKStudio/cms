<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;

class VisitorLogger implements Middleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		$ip = \Request::getClientIp();
		$url = \Request::url();
		$referer = \Request::header('referer');
		$abbr = 'XX';

		$data = json_decode( file_get_contents('http://ip-api.com/json/' . $ip), true );

		if(isset($data['countryCode'])) $abbr = $data['countryCode'];

		\App\Visit::create([

			'ip_address' => $ip,
			'url' => $url,
			'referer' => $referer,
			'abbr' => $abbr

		]);


		return $next($request);
	}

}
