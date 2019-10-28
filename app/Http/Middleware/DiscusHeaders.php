<?php

namespace App\Http\Middleware;

use Closure;

class DiscusHeaders
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
        $response->header('X-Frame-Options', 'ALLOW FROM https://games-ormrepo-co-uk.disqus.com/count.js');

        return $response;
    }
}
