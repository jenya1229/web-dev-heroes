<?php

namespace App\Models;

/**
 * @property mixed $users
 * @property string $name
 */
class Skill extends BaseModel
{
    protected $table = 'skills';

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
