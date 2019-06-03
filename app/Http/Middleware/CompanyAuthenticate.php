<?php namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Routing\Route;

class CompanyAuthenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				Session::reflash();
				return redirect()->guest('account/login');
			}
		}

		if ($request->user()->business != 1) {
			return redirect()->route('account-business-activate');
		}

		if (is_null($request->user()->companies->find( $request->route()->getParameter('company') ))) {
			return redirect()->route('account-business');
		}

		return $next($request);
	}

}
