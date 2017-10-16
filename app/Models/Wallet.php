<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Wallet
 *
 * @package App\Models
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wallet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wallet whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wallet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wallet whereUuid($value)
 * @mixin \Eloquent
 */
class Wallet extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'status',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('balance', 'status')->using(UserWallet::class);
    }


}
