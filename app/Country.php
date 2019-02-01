<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Country extends Model
{
    protected $fillable = [
        'name',
        'code',
    ];

    public $timestamps = false;


    public static function getCached()
    {
        return Cache::remember('countries', 300, function () {
            return self::orderBy('name')->get();
        });
    }

    public static function cleanCache()
    {
        Cache::pull('countries');
    }
}
