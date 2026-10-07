<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

    // check session

    if (!session()->has('custom_user_id')) {
        return redirect()->route('custom.login')
            ->withErrors(['You must be logged in to access this page.']);
    }


    // logged in user can access the page

        return $next($request);
    }
}
