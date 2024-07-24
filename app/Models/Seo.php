<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_url',
        'meta_keywords',
        'meta_site_name',
        'meta_image_alt',
        'og_title',
        'og_description',
        'og_url',
        'og_image',
        'og_type',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'canonical',
        'meta_robots',
    ];
}
