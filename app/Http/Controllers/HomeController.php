<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {
        return view('welcome', ['friends' => \App\User::orderByRaw("RAND()")->limit(5)->get()]);
    }


    /**
     * Show the current user's feed.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feed', ['pictures' => auth()->user()->pictures()->get()->reverse()]);
    }
}
