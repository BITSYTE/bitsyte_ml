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
        factory(Wallet::class)->create(['name' => 'Money', 'status' => 'active',]);
        factory(Wallet::class)->create(['name' => 'Credit', 'status' => 'active',]);
        factory(Wallet::class)->create(['name' => 'Mining', 'status' => 'active',]);
        factory(Wallet::class)->create(['name' => 'Trading', 'status' => 'active',]);
        factory(Wallet::class)->create(['name' => 'CashBack', 'status' => 'active',]);
    }
}
