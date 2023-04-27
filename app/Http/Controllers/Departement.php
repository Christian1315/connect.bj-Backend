<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Departement extends Controller
{
    static function all()
    {
        return [
            'ALIBORI', 'ATACORA', 'ATLANTIQUE', 'BORGOU', 'COLLINES', 'COUFFO', 'DONGA', 'LITTORAL', 'MONO', 'OUEME', 'PLATEAU', 'ZOU'
        ];
    }
}
