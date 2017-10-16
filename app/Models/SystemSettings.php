<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SystemSettings
 *
 * @property int $id
 * @property string $field
 * @property array $data
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemSettings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemSettings whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemSettings whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemSettings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemSettings whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemSettings whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
