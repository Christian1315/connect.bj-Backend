<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fais', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->longText('description');
            $table->boolean('status');
            $table->string('location');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('website');
            $table->string('price');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fais');
    }
};
