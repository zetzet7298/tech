<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
class Recruitment extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::saved(function ($post) {
            Artisan::call('sitemap:generate');
        });
    }
    public function seoMeta()
    {
        return $this->hasOne(SeoMeta::class);
    }
}
