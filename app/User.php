<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'birthday', 'programming_language_id', 'country_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    public function country()
    {
        return $this->hasOne('App\Country', 'id', 'country_id');
    }

    public function programmingLanguage()
    {
        return $this->hasOne('App\ProgrammingLanguage', 'id', 'programming_language_id');
    }

    public static function filter($country, $age, $id)
    {

        $id = intval($id);
        $age = intval($age);

        $users = User::orderBy('id', 'asc');
        if ($id) {
            $users->where('id', $id);
        }
        if ($country) {
            $countryId = Country::where('name', $country)->value('id');
            $users->where('country_id', $countryId);
        }
        if ($age) {
            $currentYear = date('Y');
            $filterYear = $currentYear-$age;
            $users->where('birthday', '>=', "$filterYear-01-01");
            $users->where('birthday', '<=', "$filterYear-12-31");
        }


        return $users;
    }
}
