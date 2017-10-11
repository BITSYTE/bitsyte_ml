<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wallet', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('wallet_id')->nullable();
            $table->decimal('balance', 10,2);
            $table->string('status')->default('active');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('wallet_id')->references('id')->on('wallets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_wallet');
    }
}
