<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show user profile
     *
     * @param \App\User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(\App\User $user) {
        if($user->id === null) {
            $user = auth()->user();
        }
        //dd($user->name);
        return view('profile', ['userData' => $user, 'pictures' => $user->pictures()->get()->reverse()]);
    }

}
