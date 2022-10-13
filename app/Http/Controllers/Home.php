<?php

namespace App\Http\Controllers;

use App\Models\Fai;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
        // RECUPERATIONS DES FAIs
        $fais = Fai::latest()->filter(
            request(['search'])
        )->get();
        return view('index', compact('fais'));
    }

    public static function search($name)
    {
        //   return self::fais($name);
        return collect(Fai::all())->filter(function($fai) use ($name)
        {
            return Str::contains(strtolower($fai['name']),strtolower($name));
        })->all();

        // return Fai::where(['name'=>$name])->get();
    }

    // public static function fais(string $name)
    // {
    //     $fais = Fai::where('name', $name);
    //     return $fais;
    // }
}
