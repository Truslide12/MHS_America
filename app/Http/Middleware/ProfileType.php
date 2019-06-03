<?php namespace App\Http\Middleware;

use Closure;
use Session;
use Profile;
use Illuminate\Contracts\Auth\Guard;

class ProfileType {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next, $parama = '', $paramb = '', $paramc = true)
	{
		$type = $parama;
    	$redirect = $paramb;
    	$with_id = $paramc;

    	if ($request->user()->business != 1) {
			return redirect()->route('account-business-activate');
		}

		$profile = $request->route()->getParameter('profile');

		if(!is_object($profile)) return redirect()->route('account-business');

		if(strtolower($profile->type) != strtolower($type)) {
			($with_id) ? redirect()->route($redirect, ['profile' => $profile->id]) : redirect()->route($redirect);
		}

		return $next($request);
	}

}
