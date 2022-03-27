<?php

namespace App\Models;

class FollowingUser extends \App\Models\Model
{
    protected $table = 'users_followings';

    public $incrementing = false;

    public $uuid = false;

    protected $fillable = [
        'user_id',
        'following_user_id',
    ];
}
