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
        Wallet::create(['name' => 'Money', 'status' => 'active',]);
        Wallet::create(['name' => 'Credit', 'status' => 'active',]);
        Wallet::create(['name' => 'Mining', 'status' => 'active',]);
        Wallet::create(['name' => 'Trading', 'status' => 'active',]);
        Wallet::create(['name' => 'CashBack', 'status' => 'active',]);
    }
}
