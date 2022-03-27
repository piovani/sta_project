<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;

class InfoUser
{
    static function Execute(User $user): array
    {
        $res = $user->toArray();
        $res['created_at'] = (Carbon::parse($user->created_at))->format('d M, Y');
        $res['followers'] = $user->followers()->count();
        $res['following'] = $user->following()->count();
        $res['number_posts'] = $user->posts()->count();

        return $res;
    }
}
