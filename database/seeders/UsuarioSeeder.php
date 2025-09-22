<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'id' => 1,
                'usuario' => 'admin',
                'password' => Hash::make('admin123'),
                'nombre' => 'Administrador',
                'estado' => 1,
                'id_permiso' => 1
            ],
            [
                'id' => 2,
                'usuario' => 'bibliotecario',
                'password' => Hash::make('biblio123'),
                'nombre' => 'Bibliotecario',
                'estado' => 1,
                'id_permiso' => 2
            ],
        ]);
    }
}
