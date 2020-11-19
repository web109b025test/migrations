<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::truncate();
        Product::create([
            'title' => '商品1',
            'price' => 100,
            'desc' => 'Nice!',
            'enable' => true,
            'sell-at' => Carbon::now(),
            'cgy-id' => 1,
        ]);

    }
}
