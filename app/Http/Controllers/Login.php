<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Login extends Controller
{

    public function index()
    {
        return view('connexion');
    }

    // CONNEXION
    public function login(LoginValidation $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // ====== VERIFIER SI L'UTILISATEUR EST INSCRIT=======

        #### AUTHENTIFICATION ####

        if (Auth::attempt($user)) {
            //   REGENERATION DE LA SESSION POUR L'UTILISATEUR
            $request->session()->regenerate();

            //   RETOUR A LA PAGE DE CONNEXION
            return redirect()->back()->with('success', 'Vous etes connecté avec succès!');
        }

        // =========== REDIRECTION EN CAS D'ECHEC =======
        return redirect()->back()->with('error', 'Connexion échouée');
    }

    // DECONNEXION

    public function deconnexion(Request $request)
    {

        // °°°°°°°°°°° DECONNEXION DU USER
        Auth::logout();

        // °°°°°°°°° SUPPRESION DES SESSIONS
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // °°°°°° REDIRECTION °°°°°°°°°°°°
        return redirect()->back()->with('success', 'Vous êtes déconnecté avec succès!');
    }
}
