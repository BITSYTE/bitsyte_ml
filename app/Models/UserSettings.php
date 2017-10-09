<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
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
