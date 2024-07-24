<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'images', 'street_address', 'address_locality', 'address_region', 'postal_code',
        'address_country', 'latitude', 'longitude', 'url', 'price_range', 'telephone', 'opening_hours'
    ];

    protected $casts = [
        'images' => 'array',
        'opening_hours' => 'array'
    ];
}
