<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->email) {
            return redirect()->back()->with('error', 'Ce champ est réquis!');
        }

        $email = Newsletter::where(['email'=>$request->email])->get();

        // VERIFICATION DE L'EXISTENCE DE CET MAIL DANS LA BASE DE DONNEE
        if (count($email)!=0) {
            return redirect()->back()->with('error', 'Cet email existe déjà!');
        }
        // CREATION DU NEWSLETTER
        Newsletter::create([
            'email' => $request->email,
        ]);

        // REDIRECTION BACK
        return redirect()->back()->with('success', 'Votre abonnement a été fait avec succès!');
    }
}
