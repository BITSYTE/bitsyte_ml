<?php

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Wallet::class)->create([
            'name'  =>  'Main',
            'status' => 'active',
        ]);

        factory(\App\Models\Wallet::class)->create([
            'name'  =>  'Mining',
            'status' => 'active',
        ]);
    }
}
