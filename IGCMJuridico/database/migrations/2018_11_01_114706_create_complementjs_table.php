<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplementjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complementjs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idtbloficios');
            $table->string('idoficio')->unique();
            $table->string('route');
            $table->date('fecha');
            $table->integer('idusers');
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
        Schema::dropIfExists('complementjs');
    }
}