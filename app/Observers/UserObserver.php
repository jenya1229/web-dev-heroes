<?php

namespace App\Observers;

use App\Models\Profile;
use App\User;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        $profile = new Profile();
        $profile->date = time();
        $user->profile()->save($profile);
    }
}