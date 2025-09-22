<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        // Limpia la tabla antes de insertar
        DB::table('usuarios')->delete();

DB::statement('ALTER TABLE usuarios AUTO_INCREMENT = 1');

        DB::table('usuarios')->insert([

            [
                'nombre'   => 'Admin',
                'email'    => 'admin@biblioteca.com',
                'password' => Hash::make('123456'),
                'id_rol'   => 1,
            ],
            [
                'nombre'   => 'Bibliotecario',
                'email'    => 'biblio@biblioteca.com',
                'password' => Hash::make('123456'),
                'id_rol'   => 2,
            ],
            [
                'nombre'   => 'Usuario',
                'email'    => 'usuario@biblioteca.com',
                'password' => Hash::make('123456'),
                'id_rol'   => 3,
            ],
        ]);
    }
}

