<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestamoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prestamo')->insert([
            [
                'id' => 1,
                'id_libro' => 1,
                'id_estudiante' => 1,
                'fecha_prestamo' => '2025-09-01',
                'fecha_devolucion' => '2025-09-15',
                'estado' => 'Activo'
            ],
            [
                'id' => 2,
                'id_libro' => 2,
                'id_estudiante' => 2,
                'fecha_prestamo' => '2025-09-05',
                'fecha_devolucion' => '2025-09-20',
                'estado' => 'Activo'
            ],
        ]);
    }
}
