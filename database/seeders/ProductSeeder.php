<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $faker = Faker\Factory::create('zh_TW');
        for ($i = 0; $i < 100; $i++) {
            Product::create([
                'title' => $faker->realText(10),
                'price' => $faker->numberBetween(500, 5000),
                'desc' => $faker->realText(30),
                'enabled' => rand(0, 1),
                'sell-at' => Carbon::now()->addDays($faker->numberBetween(-500, 50)),
                'cgy-id' => $faker->randomDigit,
            ]);
        }
    }
}
