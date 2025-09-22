<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('editorial', function (Blueprint $table) {   
            $table->increments('id');
            $table->string('editorial', 100);
            $table->boolean('estado')->default(1);
        });
    }

    public function down(): void {
        Schema::dropIfExists('editorial');
    }
};
