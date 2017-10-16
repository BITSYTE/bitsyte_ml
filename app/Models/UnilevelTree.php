<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * App\Models\UnilevelTree
 *
 * @property int $id
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\UnilevelTree[] $children
 * @property-read \App\Models\UnilevelTree|null $parent
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree d()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UnilevelTree whereUserId($value)
 * @mixin \Eloquent
 */
class UnilevelTree extends Model
{
    use NodeTrait;

    protected $fillable = [
        'user_id','parent_id','status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
