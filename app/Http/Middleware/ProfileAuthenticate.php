<?php namespace App\Http\Middleware;

use Closure;
use Session;
use App\Models\Profile;
use Illuminate\Contracts\Auth\Guard;

class ProfileAuthenticate {

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
	public function handle($request, Closure $next, $perm = 'edit')
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

		$prof_id = $request->route()->getParameter('profile');
		
		$profile = is_object($prof_id) ? $prof_id : Profile::find($prof_id);
		if(!is_object($profile)) return redirect()->route('account-business');

		$me = $request->user();

		//Can I even?
		if(!($profile->company_id > 0 && $me->hasRoleForCompany('admin', $profile->company_id))  && !$me->canForProfile($perm, $prof_id)) {
			if($request->ajax()) {
				return response('Unauthorized.', 401);
			}else{
				return redirect()->route('account-business');
			}
		}

		return $next($request);
	}

}
