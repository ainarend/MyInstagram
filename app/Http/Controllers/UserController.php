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

    /**
     * Syncs users following table
     *
     * @param \App\User $user - who is tracking
     * @param \App\User $follows - who is being tracked
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createFollowing(\App\User $user, \App\User $follows) {
        if($user !== null && $follows !== null) {
            $follows->followers()->sync([$user->id],false);
            return redirect('/user/'.$follows->id);
        }
        return redirect('/');
    }

}
