<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructuredData extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'headline',
        'image',
        // 'date_published',
        // 'date_modified',
        'authors',
    ];

    protected $casts = [
        'image' => 'array', // Chuyển đổi image thành mảng
        'authors' => 'array', // Chuyển đổi authors thành mảng
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
