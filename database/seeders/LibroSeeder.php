<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('libro')->insert([
            [
                'id' => 1,
                'titulo' => 'Cien años de soledad',
                'id_autor' => 1,
                'id_editorial' => 1,
                'id_materia' => 1,
                'anio' => 1967,
                'paginas' => 471,
                'ejemplares' => 10,
                'estado' => 1
            ],
            [
                'id' => 2,
                'titulo' => 'La casa de los espíritus',
                'id_autor' => 2,
                'id_editorial' => 2,
                'id_materia' => 1,
                'anio' => 1982,
                'paginas' => 368,
                'ejemplares' => 8,
                'estado' => 1
            ],
        ]);
    }
}
