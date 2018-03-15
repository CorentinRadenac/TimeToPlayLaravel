<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->increments('idEvenement');
            $table->integer('nbPersMax');
            $table->string('jeu', 300);
            $table->string('description', 500);
            $table->integer('idOrga')->unsigned();
            $table->timestamps();

            $table->foreign('idOrga')->references('idOrga')->on('organisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenement');
    }
}
