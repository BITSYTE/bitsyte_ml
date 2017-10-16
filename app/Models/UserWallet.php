<?php

namespace App\Models;

use Baum\Extensions\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserWallet extends Pivot
{
    protected $table = 'user_wallet';
    protected $fillable = ['user_id', 'wallet_id', 'balance', 'status'];

    public function log()
    {
        return $this->hasMany(UserWalletLog::class,'user_wallet_id');
    }
}
