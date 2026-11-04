<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'title' => 'Laptop Dell XPS 15',
                'price' => 1299.99,
                'qty' => 10,
                'description' => 'Powerful laptop with Intel Core i7 and 16GB RAM.',
            ],
            [
                'title' => 'MacBook Air M3',
                'price' => 1199.00,
                'qty' => 15,
                'description' => 'Apple laptop with M3 chip and Retina display.',
            ],
            [
                'title' => 'iPhone 16 Pro',
                'price' => 999.99,
                'qty' => 20,
                'description' => 'Apple smartphone with advanced camera system.',
            ],
            [
                'title' => 'Samsung Galaxy S25',
                'price' => 899.99,
                'qty' => 18,
                'description' => 'Samsung flagship smartphone with AMOLED display.',
            ],
            [
                'title' => 'iPad Air',
                'price' => 599.00,
                'qty' => 12,
                'description' => 'Apple tablet for productivity and entertainment.',
            ],
            [
                'title' => 'Samsung Galaxy Tab S10',
                'price' => 749.99,
                'qty' => 8,
                'description' => 'Android tablet with a large AMOLED display.',
            ],
            [
                'title' => 'Sony WH-1000XM5',
                'price' => 349.99,
                'qty' => 25,
                'description' => 'Wireless headphones with noise cancellation.',
            ],
            [
                'title' => 'AirPods Pro 2',
                'price' => 249.00,
                'qty' => 30,
                'description' => 'Wireless earbuds with active noise cancellation.',
            ],
            [
                'title' => 'Logitech MX Master 3S',
                'price' => 99.99,
                'qty' => 40,
                'description' => 'Wireless ergonomic mouse for professional work.',
            ],
            [
                'title' => 'Logitech G Pro X Keyboard',
                'price' => 149.99,
                'qty' => 15,
                'description' => 'Mechanical gaming keyboard with RGB lighting.',
            ],
            [
                'title' => 'Dell 27 Monitor',
                'price' => 279.99,
                'qty' => 10,
                'description' => '27-inch monitor with QHD resolution.',
            ],
            [
                'title' => 'Samsung 990 PRO SSD',
                'price' => 159.99,
                'qty' => 35,
                'description' => '1TB NVMe SSD with high-speed performance.',
            ],
            [
                'title' => 'Kingston DDR5 RAM',
                'price' => 89.99,
                'qty' => 50,
                'description' => '16GB DDR5 memory for desktop computers.',
            ],
            [
                'title' => 'Canon EOS R50',
                'price' => 679.00,
                'qty' => 7,
                'description' => 'Mirrorless camera for photography and video.',
            ],
            [
                'title' => 'Sony Alpha A6400',
                'price' => 899.00,
                'qty' => 6,
                'description' => 'Mirrorless camera with fast autofocus.',
            ],
            [
                'title' => 'Anker Power Bank',
                'price' => 49.99,
                'qty' => 60,
                'description' => '20000mAh portable charger with fast charging.',
            ],
            [
                'title' => 'JBL Flip 6',
                'price' => 129.99,
                'qty' => 22,
                'description' => 'Portable Bluetooth speaker with waterproof design.',
            ],
            [
                'title' => 'Apple Watch Series 10',
                'price' => 399.00,
                'qty' => 14,
                'description' => 'Smartwatch with health and fitness tracking.',
            ],
            [
                'title' => 'Xiaomi Smart Band 9',
                'price' => 39.99,
                'qty' => 45,
                'description' => 'Affordable fitness tracker with AMOLED display.',
            ],
            [
                'title' => 'TP-Link WiFi 6 Router',
                'price' => 89.99,
                'qty' => 16,
                'description' => 'Dual-band wireless router with WiFi 6 support.',
            ],
        ]);
    }
}
