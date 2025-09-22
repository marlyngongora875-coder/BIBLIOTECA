<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorialSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('editorial')->insert([
            ['id' => 1, 'editorial' => 'Planeta', 'estado' => 1],
            ['id' => 2, 'editorial' => 'Alfaguara', 'estado' => 1],
            ['id' => 3, 'editorial' => 'Random House', 'estado' => 1],
        ]);
    }
}
