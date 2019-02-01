<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class ProgrammingLanguage extends Model
{

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public static function getCached()
    {
        return Cache::remember('programmingLanguages', 300, function () {
            return self::orderBy('name')->get();
        });
    }

    public static function cleanCache()
    {
        Cache::pull('programmingLanguages');
    }
}
