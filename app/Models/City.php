<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    /**
     * PROTECTED FILLABLE OF TABLE
     * @var array
     */
    protected $fillable = ['name', 'code'];
}
