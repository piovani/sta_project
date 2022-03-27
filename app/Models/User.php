<?php

namespace App\Models;

class User extends Model
{
    protected $fillable = [
        'name',
    ];

    public function posts() {
        return $this->hasMany(Post::class)->orderByDesc('created_at');
    }
}
