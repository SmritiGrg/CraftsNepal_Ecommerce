<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product'; // Optional if the table name follows Laravel conventions

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'stock',
        'image',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id');
    }
}


