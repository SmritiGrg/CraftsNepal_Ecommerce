<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table ='product_category';
    protected $fillable = ['title', 'image'];
}
