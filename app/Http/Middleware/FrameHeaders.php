<?php

namespace App\Http\Middleware;

use Closure;

class FrameHeaders
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
        return $next($request);
        $response->header('X-Frame-Options', 'ALLOW FROM https://d3saea0ftg7bjt.cloudfront.net/embed/js/embed.min.js');

        return $response;
    }
}
