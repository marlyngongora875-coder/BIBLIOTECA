<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nombre' => 'General'],
            ['nombre' => 'Tecnología'],
            ['nombre' => 'Ciencia'],
            ['nombre' => 'Historia'],
        ]);
    }
}
