<?php

namespace App\Http\Controllers;

use App\Models\Contact as ModelsContact;
use Illuminate\Http\Request;


class Contact extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contact(Request $request)
    {
        //    dd($request->all());

        $contactInfos = $request->validate(
            [
                'name' => 'required',
                'objet' => 'required',
                'phone' => 'required',
                'message' => 'required',
            ],
            [
                'name.required' => 'Ce champ est réquis',
                'objet.required' => 'Ce champ est réquis',
                'phone.required' => 'Ce champ est réquis',
                'message.required' => 'Ce champ est réquis'
            ]
        );

        // ENREGISTREMENT DU CONTACT
        ModelsContact::create($contactInfos);
        // REDIRECTION
        return redirect()->back()->with('success', 'Merci de nous avoir contacter! Vous aurez bientôt un retour!');
    }
}
