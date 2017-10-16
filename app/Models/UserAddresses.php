<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserAddresses
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $type
 * @property string $address
 * @property string $zip_code
 * @property int|null $country_id
 * @property int|null $state_id
 * @property int|null $city_id
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAddresses whereZipCode($value)
 * @mixin \Eloquent
 */
class UserAddresses extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'type',
        'address',
        'zip_code',
        'status',
    ];
}
