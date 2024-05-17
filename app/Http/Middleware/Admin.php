<?php

namespace App\Http\Middleware;

use App\Models\Member;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
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
                if($data['memberType'] == 2){
                    return $next($request);
                }
                else{
                    return redirect()->back()->with('alert', 'Access Denied.');
                }
            }
        }
        return redirect()->back()->with('alert', 'User must have to login.');
    }
}
