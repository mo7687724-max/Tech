<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Mony'],
            ['name' => 'Nora'],
            ['name' => 'Rachna'],
            ['name' => 'Mony 2'],
            ['name' => 'Nora 2'],
        ]);
    }
}