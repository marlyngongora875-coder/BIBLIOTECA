<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('materia')->insert([
            ['id' => 1, 'materia' => 'Literatura', 'estado' => 1],
            ['id' => 2, 'materia' => 'Historia', 'estado' => 1],
            ['id' => 3, 'materia' => 'Filosofía', 'estado' => 1],
        ]);
    }
}
