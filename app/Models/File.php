<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'user_id'];

    public function user(): void
    {
        $this->belongsTo(User::class, 'user_id', 'id');
    }
}
