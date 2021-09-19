<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->double('montant_payé');
            $table->dateTime('date_paiement');
            $table->foreignId('location_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tarifications', function (Blueprint $table) {
            $table->dropForeign(['location_id', 'user_id']);
            });
        Schema::dropIfExists('paiements');
    }
}
