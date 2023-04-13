<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->enum('genero', ['hombre', 'mujer', 'no binario', 'prefiero no contestar']);
            $table->string('mail');
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            $table->longText('motivacion');
            $table->string('ingles');
            $table->string('estudios');
            $table->string('otra_formacion');
            $table->string('como_conocido');
            $table->string('situacion_profesional');
            $table->longText('url_perfil');
            $table->string('terminos');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE postulado MODIFY COLUMN genero ENUM('hombre', 'mujer', 'no binario', 'prefiero no contestar')");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulado');

    }
    };

