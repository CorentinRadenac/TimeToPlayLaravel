<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeus', function (Blueprint $table) {
            $table->increments('idJeux');
            $table->integer('nbrPersonneMax');
            $table->string('libelle', 400);
            $table->integer('idTypeJeu')->unsigned();
            $table->timestamps();

            $table->foreign('idtypeJeu')->references('idType')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jeux');
    }
}
