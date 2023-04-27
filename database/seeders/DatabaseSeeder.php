<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fai;
use App\Models\Pack;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // CREATION DES USERS PAR DEFAUT
        \App\Models\User::factory(1)->create();


        // CREATION DES FAIs PAR DEFAUT
        \App\Models\Fai::factory()->create([
            'image' => 'logo',
            'name' => 'Telecom',
            'description' => "Bénin Telecom est une société spécialisée dans les réseaux informatiques, téléphonique, électrique et système de sécurité fondée en mai 2004 à la suite de la scission de l'Office des Postes et Télécommunications. Il s'agit d’une société basée au Bénin, Fournisseur d'Accès Internet, spécialisée en Réseaux informatique, électrique, téléphonique et en Système de sécurité.",
            'status' => true,
            'location' => 'Cotonou',
            'phone' => '00229 21 31 20 11',
            'email' => 'info@isoceltelecom.com',
            'website' => 'https://isoceltelecom.com/',
            'price' => '30.000',
            'note' => '6 stars',
        ]);

        \App\Models\Fai::factory()->create([
            'image' => 'logo',
            'name' => 'SBiN',
            'description' => "La Société Béninoise d’Infrastructures Numériques (SBIN) est le premier  opérateur  global  du  Bénin. Elle  offre  des  solutions  performantes  sur différents segments de marché de la téléphonie fixe, de l’accès Internet,  du wholesale et bientôt de la téléphonie mobile. Avec un réseau backbone à fibre optique de plus de 3 000km couvrant 86% des  communes du Bénin et des réseaux métropolitains en développement dans la  majorité  des  grandes  villes  du  Bénin,  la  SBIN  offre  une  large  gamme  de solutions numériques destinées aux entreprises et organisations quelle que soit leur taille. Une équipe technique expérimentée et couvrant tout le territoire national se tient prête pour répondre rapidement à vos demandes et attentes afin de rendre toujours meilleure votre expérience client.",
            'status' => true,
            'location' => 'Ganhi - Cotonou - Bénin',
            'phone' => '(00229) 21 31 61 02',
            'email' => 'service-clients@sbin.bj',
            'website' => 'https://sbin.bj/',
            'price' => '30.000',
            'note' => '6 stars',
        ]);

        \App\Models\Fai::factory()->create([
            'image' => 'logo',
            'name' => 'Via',
            'description' => "VIA internet label de la société UNIVERCELL SA est un fournisseur d’accès internet très haut débit illimité à bas prix. Nous offrons des solutions internet stables, fiables et ultra rapides permettant à nos différents clients de jouir du meilleur de l’internet. Avec nous, internet n’est plus un luxe.",
            'status' => true,
            'location' => 'Cotonou - Bénin',
            'phone' => '(+229) 99 99 28 26',
            'email' => 'via@gmail.com',
            'website' => 'https://www.via.bj/',
            'price' => '30.000',
            'note' => '6 stars',
        ]);

        \App\Models\Fai::factory()->create([
            'image' => 'logo',
            'name' => 'Jeny SAS',
            'description' => "JENY SAS est un opérateur Global de Télécommunications.Titulaire de l’agrément ARCEP du 13 Mai 2015, Jenny SAS  est axée dans la Fourniture d’Accès Internet et de divers Services Internet au Bénin en utilisant la Boucle Locale Radio. Conscients du besoin en stabilité et vitesse, nous avons basé notre réseau d’accès et de distribution sur des équipements Mikrotik.Notre ambition est de nous démarquer par des offres innovantes et une qualité de relation client à nulle autre pareille",
            'status' => true,
            'location' => 'Guinkomey, Cotonou',
            'phone' => '+229 98775858',
            'email' => 'contact@jenysas.bj',
            'website' => 'https://jenysas.bj/',
            'price' => '30.000',
            'note' => '6 stars',
        ]);


        // CREATION DES PACKS PAR DEFAUT
        \App\Models\Pack::factory()->create([
            'pack_type' => 'Basic',
            'pack_price' => 99,
            'pack_description' => '50 GB Free Space,24/7 Free Support,Public API Access',
        ]);

        \App\Models\Pack::factory()->create([
            'pack_type' => 'Premium',
            'pack_price' => 99,
            'pack_description' => '50 GB Free Space,24/7 Free Support,Public API Access',
        ]);

        \App\Models\Pack::factory()->create([
            'pack_type' => 'Entreprise',
            'pack_price' => 99,
            'pack_description' => '50 GB Free Space,24/7 Free Support,Public API Access',
        ]);


        // ======= RELATION PAR DEFAUT ENTRE LES FAIs ET LES PACKS

        $fais = Fai::all();
        $packs = Pack::all();

        foreach ($fais as $key => $fai) {
            foreach ($packs as $key => $pack) {
                $fai->packs()->attach($pack);
            }
        }


        //============== CREATION DE DEPARTEMENTS & COMMUNES PAR DEFAUT ========
    }
}
