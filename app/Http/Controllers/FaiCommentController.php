<?php

namespace App\Http\Controllers;

use App\Models\Fai;
use App\Models\FaiComment;
use Illuminate\Http\Request;

class FaiCommentController extends Controller
{
    public function storeComment(Request $request)
    {

        $formDatas = $request->validate(
            [
                'nom' => 'required',
                'email' => 'required',
                'message' => 'required',
                // 'fai_rating' => 'accepted:0',
            ],
            [
                'nom.required' => 'Ce champ est réquis',
                'email.required' => 'Ce champ est réquis',
                'message.required' => 'Ce champ est réquis',
                // 'fai_rating.accepted' => 'Veuillez ajouter une note',
            ]
        );

        $formDatas['fai_id'] = $request->faiId;
        $formDatas['fai_rating'] = $request->fai_rating;

 
        //============ CREATION DU COMMENTAIRE ========

        // OBTENSION DE LA FAI
        $fai = Fai::find($request->faiId);

        // ATTACHER LE COMMENTAIRE à LA FAI
        $fai->comments()->create($formDatas);

        return redirect()->back()->with('success',' Commentaire ajouté avec succès!!');
        // dd($fai->comments);
    }
}
