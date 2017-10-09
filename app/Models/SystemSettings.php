<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemSettings extends Model
{

    /**
     * @var array
     */
    protected $fillable = ['field', 'data', 'status'];

    /**
     * @var array
     */
    protected $casts = ['data' => 'json'];
}
