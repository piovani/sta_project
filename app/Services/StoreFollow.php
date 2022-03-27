<?php

namespace App\Services;

use App\Models\FollowingUser;
use App\Models\User;

class StoreFollow
{
    static function Execute(User $user, User $userFollow): array
    {
        $count = FollowingUser::where(['user_id' => $user->id, 'following_user_id' => $userFollow->id ])->count();

        if ($count > 0) {
            return ['message' => 'user already followed'];
        }

        /** @var FollowingUser $follow */
        $follow = FollowingUser::create([
            'user_id' => $user->id,
            'following_user_id' => $userFollow->id,
        ]);

        return $follow->toArray();
    }
}
