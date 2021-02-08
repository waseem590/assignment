<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $credentials = $request->only('username', 'password');
        // dd($credentials);
        if(!Auth::attempt($credentials))
        {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
