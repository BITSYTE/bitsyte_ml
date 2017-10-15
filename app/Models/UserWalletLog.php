<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWalletLog extends Model
{
    protected $fillable = ['user_wallet_id', 'type', 'amount', 'balance', 'data', 'transaction_type', 'transaction_id'];

    public function transaction()
    {
        return $this->morphTo();
    }
}
