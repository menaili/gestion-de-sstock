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
        Schema::create('articles', function (Blueprint $table) {
            $table->string('codePN', 35);
            $table->string('typeMagasin', 10);
            $table->string('designation', 50);
            $table->integer('stkMin');
            $table->integer('stkMax');
            $table->integer('stkActuel');
            $table->integer('valeurActuel');
            $table->string('unitemesure', 12);
            $table->integer('CUMP');
            $table->unsignedBigInteger('codesection');
            $table->foreign('codesection')->references('codesection')->on('sections');
            $table->primary(['codePN', 'typeMagasin']);
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
        Schema::dropIfExists('articles');
    }
};
