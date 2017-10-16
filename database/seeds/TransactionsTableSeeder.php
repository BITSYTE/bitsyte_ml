<?php

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create(['name' => 'Transfer from other Wallet', 'type' => 'in', 'status' => 'active']);
        Transaction::create(['name' => 'Transfer to other wallet', 'type' => 'out', 'status' => 'active']);

        Transaction::create(['name' => 'Transfer from other User', 'type' => 'in', 'status' => 'active']);
        Transaction::create(['name' => 'Transfer to other User', 'type' => 'out', 'status' => 'active']);

        Transaction::create(['name' => 'CashOut', 'type' => 'out', 'status' => 'active']);
    }
}
