<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
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
        for ($i = 0; $i < 10000; $i++) {
            Product::create([
                'title' => '商品' . ($i + 1),
                'price' => rand(100, 5000),
                'desc' => 'Nice!',
                'enabled' => rand(0, 1),
                'sell-at' => Carbon::now(),
                'cgy-id' => ($i + 1),
            ]);
        }
    }
}
