<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $uuid
 * @property int|null $category_id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $color
 * @property float $price
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\BinaryTree[] $binaryNode
 * @property-read \App\Models\Category|null $category
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\UnilevelTree[] $unilevelNode
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Volume[] $volumes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUuid($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    /**
     * @var string
     */
    protected $table = "products";

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'color',
        'price',
        'category_id'
    ];

    /**
     * RELATION WHIT CATEGORY
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * RELATION WHIT USERS
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function binaryNode()
    {
        return $this->hasMany(BinaryTree::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unilevelNode()
    {
        return $this->hasMany(UnilevelTree::class);
    }

    public function volumes()
    {
        return $this->belongsToMany(Volume::class);
    }
}
