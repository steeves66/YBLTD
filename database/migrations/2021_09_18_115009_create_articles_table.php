<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('no_serie');
            $table->boolean('est_disponible')->default(1);
            $table->string('image_url')->nullable();
            $table->foreignId('type_article_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignkeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('type_article_id');
        });
        Schema::dropIfExists('articles');
    }
}
