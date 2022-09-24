<?php

namespace App\Http\Controllers;

use App\Models\Fai;
use App\Models\Follow;
use App\Models\Pack;
use App\Models\Reabonnement as ModelsReabonnement;
use Illuminate\Http\Request;

class Reabonnement extends Controller
{
    public function reabonnement1()
    {
        $fais = Fai::all();
        $packs = Pack::all();
        return view('reabonnement.reabonnement1', compact('fais','packs'));
    }

    //   POST
    public function post_reabonnement1(Request $request)
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
        if (session('reabonnement.form1')) {
            // SUPPRESION DE LA SESSION
            session()->forget('reabonnement.form1');
        }
        // CREATION DE LA SESSION
        session()->put("reabonnement.form1", $form1);

        // dd(session()->get("reabonnement.form1"));
        // REDIRECTION SUR ABONNEMENT 2
        return redirect('/reabonnement2')->with('success', "vous n'êtes qu'à 2 pas");
    }

    // GET
    public function reabonnement2(Request $request)
    {
        return view('reabonnement.reabonnement2');
    }

    // POST
    public function post_reabonnement2(Request $request)
    {
        // VALIDATION
        $form2 = $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => ['required'],
                'phone' => 'required',
                'house' => 'required',
                'city' => 'required',
                'routor_IP' => 'required',
            ],
            [
                'firstname.required' => 'Ce champ est réquis',
                'lastname.required' => 'Ce champ est réquis',
                'email.required' => 'Ce champ est réquis',
                'phone.required' => 'Ce champ est réquis',
                'house.required' => 'Ce champ est réquis',
                'city.required' => 'Ce champ est réquis',
                'routor_IP.required' => 'Ce champ est réquis',
            ]
        );

        // dd($form2);

        // ENREGISTREMENT DES DONNEES DANS UNE SECTION APRES VALIDATION
        if (session('reabonnement.form2')) {
            // SUPPRESION DE LA SESSION
            session()->forget('reabonnement.form2');
        }
        // CREATION DE LA SESSION
        session()->put("reabonnement.form2", $form2);

        // dd(session()->get("reabonnement"));
        // REDIRECTION SUR REABONNEMENT 2
        return redirect('/reabonnement3')->with('success', 'vous y êtes presque!');
    }

    // GET
    public function reabonnement3()
    {

        $form1_form2_infos = session()->get('reabonnement');

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
        return view('reabonnement.reabonnement3', compact('form1', 'form2', 'pack_price'));
    }

    // GET
    public function reabonnement4(Request $request)
    {
        // RECUPERATION DES DONNEES ENREGISTREES LORS DE L'ABONNEMENT

        // COMPOSITION DES DONNEES


        if ($request->transaction_id) {

            $form1 = session()->get('reabonnement')['form1'];
            $form2 = session()->get('reabonnement')['form2'];

            // FORMATION DU CODE DE SUIVI
            $follow_code = $request->transaction_id;
            $reabonnement_datas = [
                "choosen_fai" => $form1['fai_choosen'],
                "choosen_pack" => $form1['pack_choosen'],
                "username" => $form2['firstname'],
                "user_lastname" => $form2['lastname'],
                "user_email" => $form2['email'],
                "user_phone" => $form2['phone'],
                "user_city" => $form2['city'],
                "user_house" => $form2['house'],
                "router_ip" => $form2['routor_IP'],
                "transaction_id" => $request->transaction_id,
                "follow_code" => $follow_code
            ];

            // ENREGISTREMENT DANS LA BASE DE DONNEE
            ModelsReabonnement::create($reabonnement_datas);


            // VOYONS SI CE CODE EXISTE DANS LA BASE DE DONNEE

            $code = Follow::where(['follow_code' => $follow_code])->get();

            if (count($code) == 0) {
                // ENREGISTREMENT DU CODE DE SUIVI
                Follow::create([
                    'follow_code' => $follow_code
                ]);
            }

            return view('reabonnement.reabonnement4', compact('follow_code'));
        }

        return redirect('/')->with('error', "Echec d'abonnement! Veuillez réessayer!");
    }
}
