<?php

namespace App\Http\Controllers;

use App\Models\Fai;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(Request $request)
    {
        // RECUPERATIONS DES FAIs
        $fais = Fai::all();
        return view('index', compact('fais'));
    }

    public function searchFais(Request $request)
    {
        // dd($request->all());
        // RECUPERATIONS DES FAIs
        $fais = Fai::latest()->filter(
            request(['search'])
        )->get();
        return view('index', compact('fais'));
    }
}
