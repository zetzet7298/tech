<?php

namespace App\Models;

use App\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    use Cachable;

    protected static function boot()
    {
        parent::boot();

        static::bootCacheable('trangchu');
    }
}
