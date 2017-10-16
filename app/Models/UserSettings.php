<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserSettings
 *
 * @property int $id
 * @property int $user_id
 * @property string $field
 * @property array $data
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSettings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSettings whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSettings whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSettings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSettings whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSettings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserSettings whereUserId($value)
 * @mixin \Eloquent
 */
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
