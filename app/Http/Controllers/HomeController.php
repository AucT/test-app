<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = User::with('country')->paginate(20);

        return view('home', ['users' => $users]);
    }
}
