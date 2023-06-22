<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_achats', function (Blueprint $table) {
            $table->unsignedBigInteger('quantiteAchat')->length(6);
            $table->string('valeurA',35);
            $table->string('codePN',35);
            $table->string('typeMagasin', 10);
            $table->unsignedBigInteger('numBA')->length(6);
            $table->date('dateBA');
            $table->foreign('codePN')->references('codePN')->on('articles');
            $table->foreign('typeMagasin')->references('typeMagasin')->on('articles');
            $table->foreign('numBA')->references('numBA')->on('bon_achats');
            $table->foreign('dateBA')->references('dateBA')->on('bon_achats');
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
        Schema::dropIfExists('ligne_achats');
    }
};
