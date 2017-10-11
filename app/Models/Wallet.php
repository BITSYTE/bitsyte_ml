<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'name', 'balance', 'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
