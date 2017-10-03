<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Product::class)->create([
            'name'  =>  "Package Silver",
            'image'  =>  "silver.png",
        ]);
        factory(\App\Models\Product::class)->create([
            'name'  =>  "Package Golden",
            'image'  =>  "golden.png",
        ]);
        factory(\App\Models\Product::class)->create([
            'name'  =>  "Package Platinum",
            'image'  =>  "platinum.png",
        ]);
    }
}
