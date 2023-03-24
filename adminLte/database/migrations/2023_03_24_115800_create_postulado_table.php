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
            $table->text('nombre');
            $table->text('apellidos');
            $table->enum('genero',['femenino', 'masculino', 'no binario', 'prefiero no contestar']);
            $table->date('fecha-nacimiento');
            $table->string('telefono');
            $table->string('mail');
            $table->string('direccion');
            $table->longText('motivacion');
            $table->enum('ingles',['basico', 'medio', 'avanzado', 'nada']);
            $table->enum('estudios', ['primaria', 'secundaria', 'ciclo medio', 'bachillerato', 'ciclo sup', 'grado', 'master', 'certificado prof', 'otros', 'ninguno']);
            $table->boolean('otra-formacion');
            $table->enum('como-conocido', ['entidad social', 'rss', 'web f5', 'contactos', 'otros']);
            $table->enum('situacion-profesional',['estudiante' , 'asalariado', 'desempleado', 'demandante', 'otras']);
            $table->longText('url-perfil');
            $table->unsignedBigInteger('id_bootcamp');
            $table->unsignedBigInteger('id_proceso');
            $table->foreign('id_bootcamp')->references('id')->on('bootcamp')->onDelete('cascade');
            $table->foreign('id_proceso')->references('id')->on('proceso')->onDelete('cascade');
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
