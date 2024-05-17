<?php

namespace App\Http\Middleware;

use App\Models\Member;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MemberApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (isset(auth()->user()->email))
        {
            $loggedInUser = Member::all()->where('email',auth()->user()->email);
            foreach ($loggedInUser as $data){
                if($data['isApproved']){
                    return $next($request);
                }
                else{
                    return redirect()->back()->with('alert', 'Your account is not approved.');
                }
            }
        }
        return redirect()->back()->with('alert', 'User must have to login.');
    }
}
