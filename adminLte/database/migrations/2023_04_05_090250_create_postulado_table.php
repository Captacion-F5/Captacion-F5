<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('postulado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('genero');
            $table->string('mail');
            $table->date('fecha-nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            $table->longText('motivacion');
            $table->string('ingles');
            $table->string('estudios');
            $table->string('otra-formacion');
            $table->string('como-conocido');
            $table->string('situacion-profesional');
            $table->longText('url-perfil');
            $table->string('terminos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulado');
    }
};
