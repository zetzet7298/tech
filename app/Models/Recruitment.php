<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    public function seoMeta()
    {
        return $this->hasOne(SeoMeta::class);
    }
}
