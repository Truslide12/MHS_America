<?php

namespace App\Http\Middleware;

use Closure;

class CheckHomeAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next )
    {
        if( ! $request->user() && $request->home ){ 
                return redirect('account/login')->withError('Unauthorized, you are not logged in!');
        }

        $user_id = ($request->user()->id);
        $home_id = ($request->home->id);
        $comp_id = ($request->home->company_id);

        if ( $request->user()->mayI("global_ban", $comp_id) ) {
            return redirect('account/business')->withErrors(['Unauthorized, you have been banned!']);
        }

        if( $request->user()->isAdminForCompany($comp_id) || /*am i admin*/
            $request->user()->mayI("global_profile_access", $comp_id) || /*am i role with global profile access*/
            $request->user()->hasHomeAccess($home_id) /*have i been granted access to this profile*/
        ) {
            return $next($request);
        } else {
            return redirect('account/business')->withErrors(['Unauthorized, you do not have access!']);
        }

        return redirect('account/business')->withErrors(['Unrecognized Error. Please contact technical support with the following error.', 'ERROR: EdgeCase in CheckHomeAccess Middleware']);

    }
}
