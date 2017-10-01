<?php

namespace App\Models;

use App\User;

/**
 * @property User $user
 * @property string $specialization
 */
class Profile extends BaseModel
{
    protected $table = 'profiles';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
