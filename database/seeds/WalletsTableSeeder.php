<?php

use App\Models\Wallet;
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
        factory(Wallet::class)->create([
            'name'  =>  'Main',
            'status' => 'active',
        ]);

        factory(Wallet::class)->create([
            'name'  =>  'Mining',
            'status' => 'active',
        ]);
    }
}
