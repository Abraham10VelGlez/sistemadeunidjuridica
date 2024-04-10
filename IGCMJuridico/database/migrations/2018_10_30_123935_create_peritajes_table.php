<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeritajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peritajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('oficio');
            $table->string('oficiopartdos');
            $table->string('xhorto');
            $table->string('xhortopartdos');
            $table->string('tipodocumento');
            $table->string('asunto');
            $table->string('paradigido');
            $table->string('cargo');
            $table->date('fechanex');
            $table->string('emitidopor');
            $table->string('motivossol');
            $table->string('numerales');
            $table->date('fechalimit');
            $table->string('scanoffice');
            $table->integer('idusers');
            $table->string('status');
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
        Schema::dropIfExists('peritajes');
    }
}
