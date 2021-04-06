<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_code' => ($this->faker->unique()->randomNumber(5,true)).($this->faker->randomElement(['M','MC','V','K'])),
            'product_bag' => '100',
            'product_box' => '200',
            'product_stock' => rand(200,5000)

                 ];
    }
}
