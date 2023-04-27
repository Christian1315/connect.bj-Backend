<?php

namespace App\Http\Controllers;

use App\Models\Fai;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OffreService extends Controller
{
    public function index()
    {
        // RECUPERATIONS DES FAIs
        $fais = Fai::latest()->filter(
            request(['search'])
        )->get();

        return view('offres-services',compact('fais'));
    }
}
