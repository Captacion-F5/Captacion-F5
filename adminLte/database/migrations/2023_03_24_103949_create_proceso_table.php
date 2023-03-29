<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso', function (Blueprint $table) {
            $table->id();
            $table->enum('seleccion',['seleccionado', 'no seleccionado', 'preseleccionado']);
            $table->set('reunion-inicial',['apuntado', 'no apuntado', 'acude', 'no acude']);
            $table->set('RIC',['apuntado', 'no apuntado', 'acude', 'no acude']);
            $table->set('JPA',['apuntado', 'no apuntado', 'acude', 'no acude']);
            $table->set('talleresf5',['apuntado', 'no apuntado', 'acude', 'no acude']);
            $table->set('talleres-pre',['apuntado', 'no apuntado', 'acude', 'no acude']);
            $table->boolean('completado');
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
        Schema::dropIfExists('proceso');
    }
}
