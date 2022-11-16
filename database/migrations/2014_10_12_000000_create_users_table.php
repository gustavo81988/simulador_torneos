<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dni')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('sexo',1)->default('M');
            $table->integer('habilidad');
            $table->integer('fuerza')->nullable();
            $table->integer('velocidad')->nullable();
            $table->integer('tiempo_reaccion')->nullable();
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
        Schema::dropIfExists('users');
    }
}
