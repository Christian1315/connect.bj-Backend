<?php

namespace App\Http\Controllers;

use App\Models\Abonnement as ModelsAbonnement;
use App\Models\Fai;
use App\Models\Follow;
use App\Models\Pack;
use Illuminate\Http\Request;
use App\Mail\Inscription;
use Illuminate\Support\Facades\Mail;


class Abonnement extends Controller
{
    // GET
    public function abonnement1(Request $request)
    {
        $fais = Fai::all();
        $packs = Pack::all();
        return view('abonnement.abonnement1', compact('fais','packs'));
    }

    //   POST
    public function post_abonnement1(Request $request)
    {
        $form1 = $request->validate(
            [
                'fai_choosen' => 'required',
                'pack_choosen' => 'required'
            ],
            [
                'fai_choosen.required' => 'Ce champ est réquis',
                'pack_choosen.required' => 'Ce champ est réquis',
            ]
        );
        // ENREGISTREMENT DES DONNEES DANS UNE SECTION
        if (session('abonnement.form1')) {
            // SUPPRESION DE LA SESSION
            session()->forget('abonnement.form1');
        }
        // CREATION DE LA SESSION
        session()->put("abonnement.form1", $form1);

        // REDIRECTION SUR ABONNEMENT 2
        return redirect('/abonnement2')->with('success', "vous n'êtes qu'à 2 pas");
    }

    // GET
    public function abonnement2(Request $request)
    {
        $departements = Departement::all();
        $communes = Commune::all();

        return view('abonnement.abonnement2',compact('departements','communes'));
    }
    //   POST
    public function post_abonnement2(Request $request)
    {

        // VALIDATION
        $form2 = $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => ['required'],
                'phone' => 'required',
                'country' => 'required',
                'departement' => 'required',
                'community' => 'required',
                'house' => 'required',
                'location_description' => 'required',
                'city' => 'required',
            ],
            [
                'firstname.required' => 'Ce champ est réquis',
                'lastname.required' => 'Ce champ est réquis',
                'email.required' => 'Ce champ est réquis',
                'phone.required' => 'Ce champ est réquis',
                'country.required' => 'Ce champ est réquis',
                'departement.required' => 'Ce champ est réquis',
                'community.required' => 'Ce champ est réquis',
                'house.required' => 'Ce champ est réquis',
                'location_description.required' => 'Ce champ est réquis',
                'city.required' => 'Ce champ est réquis'
            ]
        );

        // ENREGISTREMENT DES DONNEES DANS UNE SECTION APRES VALIDATION
        if (session('abonnement.form2')) {
            // SUPPRESION DE LA SESSION
            session()->forget('abonnement.form2');
        }
        // CREATION DE LA SESSION
        session()->put("abonnement.form2", $form2);

        // REDIRECTION SUR ABONNEMENT 2
        return redirect('/abonnement3')->with('success', "vous y êtes presque!");
    }

    // GET
    public function abonnement3()
    {
        $form1_form2_infos = session()->get('abonnement');

        $form1 = $form1_form2_infos['form1'];
        $form2 = $form1_form2_infos['form2'];


        // TRAITEMENT DU PRIX DU PACK CHOISI
        $fai_choosen = $form1['fai_choosen'];
        $pack_choosen = $form1['pack_choosen'];

        $pack_price = null;

        $fai = Fai::where(['name' => $fai_choosen])->get();
        
        $packs = $fai[0]->packs;
        
        foreach ($packs as $key => $pack) {
            if ($pack->pack_type = $pack_choosen) {
                $pack_price = $pack->pack_price;
            }
        }

        // FIN DU TRAITEMENT DU PRIX DU PACK CHOISI
        return view('abonnement.abonnement3', compact('form1', 'form2', 'pack_price'));
    }

    // GET
    public function abonnement4(Request $request)
    {
        // RECUPERATION DES DONNEES ENREGISTREES LORS DE L'ABONNEMENT

        // COMPOSITION DES DONNEES
        if ($request->transaction_id) {
            $form1 = session()->get('abonnement')['form1'];
            $form2 = session()->get('abonnement')['form2'];

            // FORMATION DU CODE DE SUIVI
            $follow_code = $request->transaction_id;

            $abonnement_datas = [
                "choosen_fai" => $form1['fai_choosen'],
                "choosen_pack" => $form1['pack_choosen'],
                "username" => $form2['firstname'],
                "user_lastname" => $form2['lastname'],
                "user_email" => $form2['email'],
                "user_phone" => $form2['phone'],
                "user_country" => $form2['country'],
                "user_depart" => $form2['departement'],
                "user_community" => $form2['community'],
                "user_house" => $form2['house'],
                "location_description" => $form2['location_description'],
                "user_city" => $form2['city'],
                "transaction_id" => $request->transaction_id,
                "follow_code" => $follow_code
            ];

            // ENREGISTREMENT DANS LA BASE DE DONNEE
            ModelsAbonnement::create($abonnement_datas);


            // VOYONS SI CE CODE EXISTE DANS LA BASE DE DONNEE

            $code = Follow::where(['follow_code' => $follow_code])->get();

            if (count($code) == 0) {
                // ENREGISTREMENT DU CODE DE SUIVI
                Follow::create([
                    'follow_code' => $follow_code
                ]);
            }

            // ENVOIE DE MAIL DE CONFIRMATION
            $data = [
                'name'=> $abonnement_datas['username'],
                'header'=> 'Votre Abonnement sur connect . bj',
                'message'=> "Votre Abonnement a été fait avec succès!! Votre code de suivi: $follow_code"
            ];
           
            Mail::to($abonnement_datas['user_email'])->send(new Inscription($data));
            return view('abonnement.abonnement4', compact('follow_code'));
        }
        return redirect('/')->with('error', "Echec d'abonnement! Veuillez réessayer!");
    }
}
