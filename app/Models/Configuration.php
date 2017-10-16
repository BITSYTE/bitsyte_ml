<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Configuration
 *
 * @mixin \Eloquent
 */
class Configuration extends Model
{

    /**
     * @var array
     */
    protected $fillable = ['key', 'value'];
}
