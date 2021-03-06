<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuCulteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lieu__cultes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adresse');
            $table->dateTimeTz('prochaineDate');
            $table->string('NomVille');
            $table->integer('CodePostal');
            $table->integer('idEvenementCulte')->unsigned();
            $table->timestamps();

            $table->foreign('idEvenementCulte')->references('id')->on('evenements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lieu_culte');
    }
}
