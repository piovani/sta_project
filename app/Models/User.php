<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * @property string id
 * @property string name
 * @property Carbon created_at
 */
class User extends Model
{
    protected $fillable = [
        'name',
    ];

    public function posts() {
        return $this->hasMany(Post::class)->orderByDesc('created_at');
    }

    public function following() {
        return $this->hasMany(FollowingUser::class);
    }

    public function followers() {
        return $this->hasMany(FollowingUser::class, 'following_user_id');
    }
}
