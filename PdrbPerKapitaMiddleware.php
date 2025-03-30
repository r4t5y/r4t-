<?php namespace Bantenprov\PdrbPerKapita\Http\Middleware;

use Closure;

/**
 * The PdrbPerKapitaMiddleware class.
 *
 * @package Bantenprov\PdrbPerKapita
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PdrbPerKapitaMiddleware
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
    }
}
