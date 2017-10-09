<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * FIELD PROTECTED
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * RELATION WHIT TABLE PRODUCTS
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
