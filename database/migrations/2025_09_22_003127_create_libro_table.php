<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('libro', function (Blueprint $table) {
    $table->id();
    $table->string('titulo');
    $table->integer('num_pagina');
    $table->date('anio_edicion');
    $table->integer('cantidad');
    $table->text('descripcion')->nullable();
    $table->boolean('estado')->default(1);

    // claves foráneas
    $table->unsignedBigInteger('id_autor');
    $table->unsignedBigInteger('id_editorial');
    $table->unsignedBigInteger('id_materia');

    $table->string('imagen')->nullable();

    $table->foreign('id_autor')->references('id')->on('autor')->onDelete('cascade');
    $table->foreign('id_editorial')->references('id')->on('editorial')->onDelete('cascade');
    $table->foreign('id_materia')->references('id')->on('materia')->onDelete('cascade');

    $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('libro');
    }
};
