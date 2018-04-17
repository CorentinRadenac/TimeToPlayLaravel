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
            $table->increments('id');
            $table->string('nomDuJeu');
            $table->string('urlImage');
            $table->integer('nbrPersonneMini');
            $table->integer('nbrPersonneMax');
            $table->text('descriptionJeu', 400);
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
        Schema::dropIfExists('jeux');
    }
}
