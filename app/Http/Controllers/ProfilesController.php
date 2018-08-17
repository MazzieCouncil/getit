<?php

namespace App\Http\Controllers;

use App\User;
use App\Activity;

class ProfilesController extends Controller
{
    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('profiles.show', ['profileUser' => $user, 'activities' => Activity::feed($user)]);
    }

}
