<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var string
     */
    protected $table = "products";

    protected $fillable = [
        'name',
        'description',
        'image',
        'color',
        'price',
        'qv',
        'bv',
        'cv',
        'lv',
        'category_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
