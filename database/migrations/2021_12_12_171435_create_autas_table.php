<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auta', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->date('dat_proiz');
            $table->integer('sifra')->unique();
            $table->integer('id_dijelovi');
            $table->integer('id_korisnik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autas');
    }
}
