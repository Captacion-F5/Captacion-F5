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
        Schema::create('postulado-asistencia-evento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('postulado_id');
            $table->foreign('postulado_id')->references('id')->on('postulado')->onDelete('cascade');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('event')->onDelete('cascade');
            $table->boolean('asistencia')->default(false);
            $table->boolean('inscripcion')->default(false);
            $table->boolean('notificado')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulado-asistencia-evento');
    }
};
