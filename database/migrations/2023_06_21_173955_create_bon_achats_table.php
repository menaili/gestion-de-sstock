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
        Schema::create('bon_achats', function (Blueprint $table) {
            $table->unsignedBigInteger('numBA')->length(6);
            $table->date('dateBA')->index();
            $table->string('typeAchat');
            $table->unsignedBigInteger('tauxchange')->length(12);
            $table->unsignedBigInteger('valeurOR')->length(12);
            $table->unsignedBigInteger('fraisApproche')->length(12);
            $table->string('codeMoney');
            $table->unsignedBigInteger('numcmd')->length(6);
            $table->date('datecmd');
            $table->unsignedBigInteger('codefacture')->length(6);
            $table->date('datefacture');
            $table->primary(['numBA', 'dateBA']);
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
        Schema::dropIfExists('bon_achats');
    }
};
