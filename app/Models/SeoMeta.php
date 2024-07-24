<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'post_id',
        'recruitment_id',
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
        'meta_robots'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    
    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class);
    }
}
