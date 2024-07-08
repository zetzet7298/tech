<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function scopeActive($q) {
        return $q->where('active', true);
    }

    public function posts() {
        return $this->hasMany('App\Models\Posts');
    }
}
