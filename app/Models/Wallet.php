<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Wallet
 *
 * @package App\Models
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
