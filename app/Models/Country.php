<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    /**
     * @var array
     */
    protected $fillable = ['name', 'code'];
}
