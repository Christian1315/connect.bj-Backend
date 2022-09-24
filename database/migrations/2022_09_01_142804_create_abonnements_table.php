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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->string('choosen_fai');
            $table->string('choosen_pack');
            $table->string('username');
            $table->string('user_lastname');
            $table->string('user_email');
            $table->string('user_phone');
            $table->string('user_country');
            $table->string('user_depart');
            $table->string('user_community');
            $table->string('user_city');
            $table->string('user_house');
            $table->string('location_description');
            $table->string('transaction_id');
            $table->string('follow_code');
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
        Schema::dropIfExists('abonnements');
    }
};
