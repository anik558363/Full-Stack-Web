<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {





        $token = $request->cookie('token');

       



        if ($token) {

            $token = decrypt($token);

            if ($token['password'] == 'anik12345') {
                return $next($request);
            }
        } else {
            return response()->json([
                'message' => 'Unauthorize'
            ], 401);
        }
    }
}
