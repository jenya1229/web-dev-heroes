<?php

namespace App\Models;

use App\User;

/**
 * @property User $user
 * @property string $specialization
 * @property string $story
 * @property int $user_id
 * @property int $date
 */
class Profile extends BaseModel
{
    protected $table = 'profiles';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
