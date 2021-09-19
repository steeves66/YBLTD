<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprieteArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriete_articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_proprietaire');
            $table->boolean('est_obligatoire')->default(1);
            $table->foreignId('type_article_id')->constrained();
            $table->timestamps();
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
        Schema::table('propriete_articles', function (Blueprint $table) {
            $table->dropForeign('type_article_id');
        });
        Schema::dropIfExists('propriete_articles');
    }
}
