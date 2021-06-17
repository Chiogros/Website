<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IPblacklist
{

    private $bloquedIPs = [];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (in_array($request->ip(), $this->bloquedIPs))
            abort(403);

        return $next($request);
    }
}
