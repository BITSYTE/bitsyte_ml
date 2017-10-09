<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddresses extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'type',
        'address',
        'zip_code',
        'status',
    ];
}
