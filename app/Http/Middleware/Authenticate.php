<?php

namespace App\Http\Middleware;
use Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        echo "test";
        $credentials = $request->only('username', 'password');
        // dd($credentials);
        
        if (!Auth::attempt($credentials)) {
            return route('login');
        }
    }
}
