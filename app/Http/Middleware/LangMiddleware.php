<?php

namespace App\Http\Middleware;

use Closure;

class LangMiddleware
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
        if(!empty(session('lang'))){
            \App::setlocale(session('lang'));
        }else{
            $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
            if($idioma == 'es' || $idioma == 'en')
                session(['lang'=>$idioma]);
            else
                session(['lang'=>'en']);
            \App::setlocale(session('lang'));
        }
        return $next($request);
    }
}
