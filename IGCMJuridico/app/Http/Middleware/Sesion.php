<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class Sesion
{
    protected function _construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*MIDDLEWARE CREADO CON LA FINALIDAD DE BORRAR CACHE*/
    public function handle($request, Closure $next)
    {
        header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
        return $next($request);
    }
}
