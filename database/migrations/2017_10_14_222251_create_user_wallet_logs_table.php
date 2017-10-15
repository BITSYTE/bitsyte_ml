<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWalletLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wallet_logs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_wallet_id');
            $table->string('type', 3);
            $table->decimal('amount', 10, 4);
            $table->decimal('balance', 10, 4);
            $table->json('data');
            $table->string('transaction_type');
            $table->integer('transaction_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_wallet_logs');
    }
}
