<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    protected $categories = [
        'Esto es una categoria',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->categories as $category)
        {
            \App\Models\Category::create([
                'name'  =>  $category
            ]);
        }
    }
}
