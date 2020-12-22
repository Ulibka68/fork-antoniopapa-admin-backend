<?php

namespace App\Http\Middleware;


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
//        if (! $request->expectsJson()) {
//            return route('login');
//        }
    }

    /**
     *  Handle an incominh request
     *
     * @param \\Illuminate\HTTP\Request $request
     * @param  \Closure @next
     * @param string[] ...$guards
     * @return mixed
     *
     * @throw \Illuminate\Auth\AuthenticalntionException
     */
    public function handle($request, \Closure $next, ...$guards){
        $this->authenticate($request,$guards);
        return $next($request);
    }
}
