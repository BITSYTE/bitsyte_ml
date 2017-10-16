<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Volume
 *
 * @property int $id
 * @property string $name
 * @property float $value
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Volume whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Volume whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Volume whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Volume whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Volume whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Volume whereValue($value)
 * @mixin \Eloquent
 */
class Volume extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
