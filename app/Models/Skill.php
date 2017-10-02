<?php

namespace App\Models;

use App\User;

/**
 * @property User[] $users
 * @property string $name
 */
class Skill extends BaseModel
{
    protected $table = 'skills';

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_skills');
    }
}
