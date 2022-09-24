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
            'description' => "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer",
            'status' => true,
            'location' => 'Cotonou',
            'phone' => '61765590',
            'email' => 'telecom@gmail.com',
            'website' => 'www.telecom.com',
            'price' => '30.000',
            'note' => '6 stars',
        ]);

        \App\Models\Fai::factory()->create([
            'image' => 'logo',
            'name' => 'SBiN',
            'description' => "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer",
            'status' => true,
            'location' => 'Godomey',
            'phone' => '61765590',
            'email' => 'sbin@gmail.com',
            'website' => 'www.sbin.com',
            'price' => '30.000',
            'note' => '6 stars',
        ]);

        \App\Models\Fai::factory()->create([
            'image' => 'logo',
            'name' => 'Via',
            'description' => "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer",
            'status' => true,
            'location' => 'Abomey',
            'phone' => '61765590',
            'email' => 'via@gmail.com',
            'website' => 'www.via.com',
            'price' => '30.000',
            'note' => '6 stars',
        ]);

        \App\Models\Fai::factory()->create([
            'image' => 'logo',
            'name' => 'Jeny',
            'description' => "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer",
            'status' => true,
            'location' => 'Porto-Novo',
            'phone' => '61765590',
            'email' => 'jeny@gmail.com',
            'website' => 'www.jeny.com',
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
