<?php

namespace App\Http\Controllers;

use App\Models\Fai;
use App\Models\FaiComment;
use Illuminate\Http\Request;

class FaiController extends Controller
{
    public function profil(Fai $fai)
    {
        //==============  ENVOIE DES INFOS DE FAI A LA PAGE FAI-PROFIL ========//

        // RECUPERATIONS DES FAIs
        $fais = Fai::latest()->get();

        // RECUPERATIONS DES COMENTAIRES
        $comments = FaiComment::where('fai_id', $fai->id)->get();

        // CALCUL DU NOMBRE D'ETOILE DE L'FAI
        $ratingSum = FaiComment::where('fai_id', $fai->id)->sum('fai_rating');

        //  SOMME DIVISER PAR LE NOMBRE DE COMMENTAIRE
        if (count($comments) == 0) {
            $ratingValue = 0;
            $ratingValue = 0;
        }else{
            $ratingValue = $ratingSum / count($comments);
            $ratingValue = number_format($ratingValue);
        }

        return view('fai-profil', compact('fais', 'fai', 'comments', 'ratingValue'));


        // dd($ratingSum);
    }
}
