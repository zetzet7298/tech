<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
class Category extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::saved(function ($post) {
            Artisan::call('sitemap:generate');
        });
    }
    public function scopeActive($q) {
        return $q->where('active', true);
    }

    public function posts() {
        return $this->hasMany('App\Models\Posts');
    }
}
