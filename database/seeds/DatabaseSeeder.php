<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Models\User::class)->create([
            'username' => 'mxcorp',
            'email' => 'servers@mxcorp.net',
            'password' => 'bitsyte',
        ]);

        factory(App\Models\User::class)->create();

        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(WalletsTableSeeder::class);
    }
}
