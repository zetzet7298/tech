<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
class Post extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::saved(function ($post) {
            Artisan::call('sitemap:generate');
        });
    }
    // Quan hệ với model User
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function scopeActive($q) {
        return $q->where('active', true);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function seoMeta()
    {
        return $this->hasOne(SeoMeta::class);
    }
    public function structuredData()
    {
        return $this->hasOne(StructuredData::class);
    }
}
