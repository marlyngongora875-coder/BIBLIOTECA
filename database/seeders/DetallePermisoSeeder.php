<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallePermisoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('detalle_permisos')->insert([
            ['id' => 1, 'id_permiso' => 1, 'modulo' => 'Libros', 'leer' => 1, 'crear' => 1, 'editar' => 1, 'eliminar' => 1],
            ['id' => 2, 'id_permiso' => 2, 'modulo' => 'Préstamos', 'leer' => 1, 'crear' => 1, 'editar' => 0, 'eliminar' => 0],
        ]);
    }
}
