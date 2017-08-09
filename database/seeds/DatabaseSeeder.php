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
            'email' => 'bitsyte',
            'password' => 'Bitsyte01',
        ]);

        factory(App\Models\User::class)->create();
    }
}
