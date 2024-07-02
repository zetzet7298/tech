<?php

namespace App\Models;

use App\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use Cachable;

    protected static function boot()
    {
        parent::boot();

        static::bootCacheable('all');
    }

    protected $fillable = ['key', 'value', 'additional_value', 'type'];

    public static function get($key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public static function set($type, $key, $value, $additionalValue = null)
    {
        $setting = static::updateOrCreate(['type' => $type, 'key' => $key], ['value' => $value, 'additional_value' => $additionalValue]);
        return $setting;
    }

    public static function getByType($type)
    {
        $originalArray  = static::where('type', $type)->select(['key', 'value', 'additional_value'])->get()->toArray();
        $newArray = [];

        foreach ($originalArray as $item) {
            $newArray[$item['key']] = [
                'value' => $item['value'],
                'additional_value' => $item['additional_value']
            ];
        }
        return $newArray;
    }

    public static function getByKeyFromArray($array, $key)
    {
        return $array[$key];
    }
}
