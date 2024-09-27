<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function getSetting($key)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : null;
    }
}

