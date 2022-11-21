<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPartidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_torneo')
                ->constrained('torneos')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->index()
            ;
            $table->foreignId('id_jugador_1')->index();
            $table->foreignId('id_jugador_2')->index();
            $table->integer('ronda')->unsigned();
            $table->integer('puntuacion_jugador_1')->unsigned();
            $table->integer('puntuacion_jugador_2')->unsigned();
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
        Schema::dropIfExists('partidos');
    }
}
