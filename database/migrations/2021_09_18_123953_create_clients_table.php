<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->string('nationalite');
            $table->string('ville');
            $table->string('pays');
            $table->string('adresse');
            $table->string('telephone1');
            $table->string('telephone2')->nullable();
            $table->string('sexe');
            $table->string('piece_identite');
            $table->string('numero_piece_identite');
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
        Schema::dropIfExists('clients');
    }
}
