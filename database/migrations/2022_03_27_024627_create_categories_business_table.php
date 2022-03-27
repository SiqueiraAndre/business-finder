<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_business', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('business_id');
            $table->timestamps();
        });

        Schema::table('categories_business', function (Blueprint $table) {
            /**
             * Aqui estamos alterando a tabela e
             * colocando uma chave estrangeira no
             * campo que armazena o ID da categoria
             */
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            /**
             * Aqui estamos alterando a tabela e
             * colocando uma chave estrangeira no
             * campo que armazena o ID da negócio
             */
            $table->foreign('business_id')->references('id')->on('business')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_business');
    }
}
