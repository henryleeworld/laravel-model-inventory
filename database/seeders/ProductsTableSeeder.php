<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'id'         => 1,
                'name'      => 'PS4《Final Fantasy VII Remake FF7重製版》中文版',
                'price'      => 1790,
                'created_at' => '2020-04-02 19:31:45',
                'updated_at' => '2020-04-02 19:31:45',
            ],
            [
                'id'         => 2,
                'name'       => 'PS4《仁王2 (NIOH 2)》一般版',
                'price'      => 1790,
                'created_at' => '2020-04-02 19:31:45',
                'updated_at' => '2020-04-02 19:31:45',
            ],
        ];

        Product::insert($products);
    }
}
