<?php

namespace Database\Seeders;

use App\Models\Product;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'price' => 999.99,
            'stock' => 10,
            'description' => 'High performance laptop',
        ]);

        Product::create([
            'name' => 'Mouse',
            'price' => 19.99,
            'stock' => 20,
            'description' => 'High performance mouse',
        ]);

       


    }
}
