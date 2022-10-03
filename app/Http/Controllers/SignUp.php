<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpValidation;
use App\Models\User;
use App\Mail\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SignUp extends Controller
{

    public function index()
    {
        return view('inscription');
    }

    public function sendmailTest()
    {
        // ENVOIE DE MAIL DE CONFIRMATION

        $data = ['firstname' => 'GOGO', 'lastname' => 'Christian'];

        Mail::to('gogochristian009@gmail.com')->send(new Inscription($data));

        return "Mail envoyé avec succès";
    }

    // STORE INSCRIPTION
    public function store(SignUpValidation $request)
    {
        // CRYPTONS LE PASSWORD ET BALANSSONS-LE DANS LA COLONNE password_encrypted
        $password_encrypted = Crypt::encryptString($request->password);

        // HASHER LE PASSWORD DE L'UTILISATEUR
        $passwordHashed = Hash::make($request->password);


        $formFields = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'country' => $request->country,
            'city' => $request->city,
            'house' => $request->house,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $passwordHashed,
            'password_encrypted' => $password_encrypted,
        ];

        // ENREGISTREMENT DE L'UTILISATEUR
        User::create($formFields);

        // ENVOIE DE MAIL DE CONFIRMATION
        // dd($formFields);
        Mail::to($request->email)->send(new Inscription($formFields));

        return redirect('/connexion')->with('success', 'Vous êtes enregistré avec succès!');
    }
}
