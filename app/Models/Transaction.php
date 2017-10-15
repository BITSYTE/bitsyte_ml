<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['name', 'type', 'status'];

    public function log()
    {
        return $this->morphMany('App\Models\UserWalletLog', 'transaction');
    }
}
