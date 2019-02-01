<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function show(User $user)
    {
        $pageTitle = sprintf("#%d %s %s", $user->id, $user->name, $user->last_name);
        return view('users.show', compact('pageTitle', 'user'));
    }
}
