<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDijelovisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dijelovi', function (Blueprint $table) {
            $table->id('id_dijelovi');
            $table->string('naziv');
            $table->integer('id_auto');
            $table->integer('sifra')->unique();
            $table->integer('cijena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dijelovis');
    }
}
