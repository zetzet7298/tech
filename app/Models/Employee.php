<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'introduction',
        'photo',
    ];

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

    public function scopeActive($q) {
        return $q->where('active', true);
    }

    public function seoMeta()
    {
        return $this->hasOne(SeoMeta::class);
    }
}
