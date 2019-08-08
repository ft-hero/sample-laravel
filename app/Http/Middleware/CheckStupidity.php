<?php

namespace App\Http\Middleware;

use Closure;

class CheckStupidity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (request()->has('i_am_stupid')) {
            return response()->json([
                'message' => 'No place for stupids',
                'status' => 'fail',
            ]);
        }
        return $next($request);
    }
}
