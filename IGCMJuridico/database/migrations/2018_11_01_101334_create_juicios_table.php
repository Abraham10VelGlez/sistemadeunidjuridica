<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juicios', function (Blueprint $table) {            
            $table->increments('id');
            $table->string('expediente');
            $table->string('quejoso');
            $table->string('nojuicio');
            $table->string('asunto');
            $table->string('paradigido');
            $table->string('cargo');            
            $table->date('fechanex');
            $table->date('fechalimit');
            $table->string('emitidopor');
            $table->string('scan');            
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
        Schema::dropIfExists('juicios');
    }
}
