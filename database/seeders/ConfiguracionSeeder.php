<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfiguracionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('configuracion')->insert([
            ['id' => 1, 'nombre' => 'Nombre Biblioteca', 'valor' => 'Biblioteca Central'],
            ['id' => 2, 'nombre' => 'Dirección', 'valor' => 'Calle 123, Ciudad'],
            ['id' => 3, 'nombre' => 'Teléfono', 'valor' => '123456789'],
        ]);
    }
}
