<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemSettings extends Model
{
    protected $fillable = ['field', 'data', 'status'];

    protected $casts = ['data' => 'json'];
}
