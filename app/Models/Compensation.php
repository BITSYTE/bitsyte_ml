<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compensation extends Model
{
    protected $fillable = ['key', 'name', 'inputs', 'params', 'code', 'frequency', 'status'];

    public function log()
    {
        return $this->morphMany(UserWalletLog::class, 'transaction');
    }
}
