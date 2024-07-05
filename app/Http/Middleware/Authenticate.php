<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        
        if (!$request->expectsJson()) {
            if (!Auth::check() || Auth::user()->user_type == 0) {
                return route('user.login');
            }
            // Redirect to the default Laravel login page
            return route('login');
        }
        // return $request->expectsJson() ? null : route('login');
    }
}
