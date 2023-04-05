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
        Schema::create('postulado-bootcamp-registro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('postulado_id');
            $table->foreign('postulado_id')->references('id')->on('postulado')->onDelete('cascade');
            $table->unsignedBigInteger('bootcamp_id');
            $table->foreign('bootcamp_id')->references('id')->on('bootcamp')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulado-bootcamp-registro');
    }
};
