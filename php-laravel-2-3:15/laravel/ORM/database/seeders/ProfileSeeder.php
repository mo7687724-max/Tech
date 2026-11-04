<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profiles')->insert([
            ['user_id' => 1, 'phone' => '012345678'],
            ['user_id' => 2, 'phone' => '012345679'],
            ['user_id' => 3, 'phone' => '012345680'],
            ['user_id' => 4, 'phone' => '012345681'],
            ['user_id' => 5, 'phone' => '012345682'],
        ]);
    }
}