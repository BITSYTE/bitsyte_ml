<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
