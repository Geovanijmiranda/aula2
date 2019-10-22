<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;

class VerificaHora
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
        $horaAtual = Carbon::now()->setTimezone('America/Sao_Paulo')->format('H'); 
        if($horaAtual < 12){
           return $next($request);
        };
        return redirect('/');
    }
}
