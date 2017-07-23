<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    protected $fillable = ['field', 'data', 'status'];

    protected $casts = ['data' => 'json'];
}
