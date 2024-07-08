<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Quan hệ với model User
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function scopeActive($q) {
        return $q->where('active', true);
    }
}