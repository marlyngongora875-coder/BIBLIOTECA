<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_libro');
            $table->unsignedBigInteger('id_estudiante');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion')->nullable();
            $table->boolean('estado')->default(1);
            $table->timestamps();

            $table->foreign('id_libro')->references('id')->on('libro')->onDelete('cascade');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('prestamos');
    }
};
