<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('libro')->insert([
            [
                'titulo' => 'El Quijote',
                'cantidad' => 5,
                'id_autor' => 1,
                'id_editorial' => 1,
                'anio_edicion' => '2005-01-01',
                'id_materia' => 1,
                'num_pagina' => 863,
                'descripcion' => 'Clásico de la literatura española.',
                'imagen' => null,
                'estado' => 1,
            ],
            [
                'titulo' => 'Cien años de soledad',
                'cantidad' => 3,
                'id_autor' => 2,
                'id_editorial' => 2,
                'anio_edicion' => '1990-05-15',
                'id_materia' => 2,
                'num_pagina' => 471,
                'descripcion' => 'Obra maestra de Gabriel García Márquez.',
                'imagen' => null,
                'estado' => 1,
            ],
        ]);
    }
}
