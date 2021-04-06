<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([

            'product_code' => '47050M',
            'product_bag' => '100',
            'product_box' => '300',
            'product_stock' => '500'

        ]);

        Product::create([

            'product_code' => '47060V',
            'product_bag' => '100',
            'product_box' => '300',
            'product_stock' => '500'

        ]);

        Product::create([

            'product_code' => '35070KM',
            'product_bag' => '100',
            'product_box' => '300',
            'product_stock' => '500'

        ]);

        Product::create([

            'product_code' => '48050K',
            'product_bag' => '100',
            'product_box' => '300',
            'product_stock' => '500'

        ]);

        Product::create([

            'product_code' => '89110V',
            'product_bag' => '100',
            'product_box' => '300',
            'product_stock' => '500'

        ]);
    }
}
