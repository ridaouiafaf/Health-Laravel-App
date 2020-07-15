<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // type sanguin
            $table->string('status');//urgent ou pas
            $table->integer('donneurs');//nombres de personnes voulu
            $table->string('gsm');// telephone
            $table->string('address');// address où donner?
            $table->string('city');// ville
            $table->bigInteger('user_id')->constrained();// utilisateur ayant poster l'annonce
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
        Schema::dropIfExists('donations');
    }
}
