<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $products = [
            [
                'id'         => 1,
                'name'       => __('Rise of the Ronin (Traditional Chinese) - PS5'),
                'price'      => 1990,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'         => 2,
                'name'       => __('Final Fantasy VII Rebirth (Traditional Chinese) - PS5'),
                'price'      => 1880,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Product::insert($products);
    }
}
