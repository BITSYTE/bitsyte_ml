<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserWalletLog
 *
 * @property int $id
 * @property int $user_id
 * @property int $user_wallet_id
 * @property string $type
 * @property float $amount
 * @property float $balance
 * @property mixed $data
 * @property string $transaction_type
 * @property int $transaction_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $transaction
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereTransactionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserWalletLog whereUserWalletId($value)
 * @mixin \Eloquent
 */
class UserWalletLog extends Model
{
    protected $fillable = ['user_wallet_id', 'type', 'amount', 'balance', 'data', 'transaction_type', 'transaction_id'];

    public function transaction()
    {
        return $this->morphTo();
    }
}
