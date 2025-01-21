<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['id','total_price', 'order_details', 'order_satuts','order_date','user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
