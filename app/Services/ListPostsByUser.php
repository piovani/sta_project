<?php

namespace App\Services;

use App\Models\FollowingUser;
use App\Models\Post;
use App\Models\User;

class ListPostsByUser
{
    static function Execute(User $user, int $page = 1, int $perPage = 10, bool $follow = false): array
    {
        $res = [];

        if ($follow) {
            $allUserIds = $user->following()->pluck('following_user_id')->toArray();
            $allUserIds[] = $user->id;

            $res = Post::whereIn('user_id', $allUserIds);
        } else {
            $res = $user->posts();
        }

        return $res->paginate($perPage, ['*'], $page)->toArray();
    }
}
