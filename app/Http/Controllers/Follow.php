<?php

namespace App\Http\Controllers;

use App\Models\Follow as ModelsFollow;
use Illuminate\Http\Request;

class Follow extends Controller
{
    public function index()
    {
        return view('suivi-de-commande');
    }


    public function follow(Request $request)
    {
        // dd($request->all());

        $request->validate(
            [
                'follow_code' => 'required'
            ],
            [
                'follow_code.required' => 'Ce champ est réquis!'
            ]
        );

        // VOYONS SI CE CODE EXISTE DANS LA BASE DE DONNEE

        $code = ModelsFollow::where(['follow_code' => $request->follow_code])->get();

        if (count($code) == 0) {
            return redirect()->back()->with('error', "Cette commande n'existe pas!");
        }
        // REDIRECTION EN CAS DE SUICCES
        return view('confirmation-suivi');
    }
}
