<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class SoloSuper
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch (auth::user()->tipo) {
            case '1':
               return redirect('home');
                break;
            case '2':
                return redirect('supervisor');
            break;
            case '3':
                return redirect('encargado');

            break;
            
            case '4':
                return $next($request);
            break;
            case '5':
                return redirect('contador');

            break;

        }
    }
}