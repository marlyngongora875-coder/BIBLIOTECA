<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('autor')->insert([
            ['id' => 1, 'autor' => 'Gabriel García Márquez', 'estado' => 1],
            ['id' => 2, 'autor' => 'Isabel Allende', 'estado' => 1],
            ['id' => 3, 'autor' => 'Mario Vargas Llosa', 'estado' => 1],
        ]);
    }
}
