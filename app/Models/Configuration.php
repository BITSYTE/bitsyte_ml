<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{

    /**
     * @var array
     */
    protected $fillable = ['key', 'value'];
}
