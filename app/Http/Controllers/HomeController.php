<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projet;
use App\user;
use App\SuivieModel;

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
        $users = User::all();
        $projets = Projet::all();
        return view('home')->with('projets', $projets)->with('users', $users);
    }
}
