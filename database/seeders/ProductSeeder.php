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
        Product::create([
            'title' => '商品1',
            'price' => 100,
            'desc' => 'Nice!',
            'enabled' => true,
            'sell-at' => Carbon::now(),
            'cgy-id' => 1,
        ]);

    }
}
