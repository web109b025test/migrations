<?php

namespace Database\Factories;

use App\Models\Product;
use Carbon\Carbon;
use Faker;
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
        $faker = Faker\Factory::create('zh_TW');
        return [
            'title' => $faker->realText(10),
            'price' => $faker->numberBetween(500, 5000),
            'desc' => $faker->realText(30),
            'enabled' => rand(0, 1),
            'sell-at' => Carbon::now()->addDays($faker->numberBetween(-500, 50)),
            'cgy-id' => $faker->randomDigit,
        ];
    }
}
