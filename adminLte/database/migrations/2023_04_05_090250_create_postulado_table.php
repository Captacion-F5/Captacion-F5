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
            $table->string('nombre')->nullable(false);
            $table->enum('genero', ['hombre', 'mujer', 'no binario', 'prefiero no contestar'])->nullable(false);
            $table->string('mail')->nullable(false);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('telefono')->nullable(false);
            $table->string('direccion')->nullable();
            $table->longText('motivacion')->nullable();
            $table->string('ingles')->nullable();
            $table->string('estudios')->nullable();
            $table->string('otra_formacion')->nullable();
            $table->string('como_conocido')->nullable();
            $table->string('situacion_profesional')->nullable();
            $table->longText('url_perfil')->nullable(false);
            $table->string('terminos')->nullable();
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
