<?php

namespace App\Models;

use App\Models\Model;

class Post extends Model
{
    protected $hidden = [
        'repost_post_id',
        'quote_user_id',
        'created_at',
    ];
}
