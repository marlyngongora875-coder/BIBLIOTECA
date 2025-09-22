<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('valor', 200)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('configuracion');
    }
};
