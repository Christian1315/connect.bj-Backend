<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // VERIFIER SI L'UTILISATEUR EST CONNECTEE
        if (Auth::check()) {

            // REDIRECTION DU USER A LA PAGE D'ACCEUIL EN CAS D'ECHEC
           return redirect('/');
        }

        // CONTINUER SI TOUT EST BON
        return $next($request);
    }
}
