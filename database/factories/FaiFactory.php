<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fai>
 */
class FaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image'=>'logo',
            'name'=>fake()->name(),
            'description'=>'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer
            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer',
            'status'=>true,
            'location'=>fake()->name(),
            'phone'=>'61765590',
            'email'=>'telecom@gmail.com',
            'website'=>'www.telecom.com',
            'price'=>'30.000',
            'note'=>'6 stars',
        ];
    }
}
