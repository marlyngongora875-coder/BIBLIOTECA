<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudianteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('estudiante')->insert([
            ['id' => 1, 'nombre' => 'Juan Pérez', 'carrera' => 'Ingeniería', 'estado' => 1],
            ['id' => 2, 'nombre' => 'María Gómez', 'carrera' => 'Derecho', 'estado' => 1],
        ]);
    }
}
