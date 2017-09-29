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
        ]);
        factory(\App\Models\Product::class)->create([
            'name'  =>  "Package Golden",
        ]);
        factory(\App\Models\Product::class)->create([
            'name'  =>  "Package Platinum",
        ]);
    }
}
