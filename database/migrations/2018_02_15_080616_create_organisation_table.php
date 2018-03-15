<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->increments('idOrga');
            $table->dateTime('dateEtHeures');
            $table->string('lieu', 200);
            $table->string('NomVille');
            $table->integer('codePostal');
            $table->integer('idPersonne')->unsigned();
            $table->timestamps();

            $table->foreign('idPersonne')->references('id')->on('personnes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisation');
    }
}
