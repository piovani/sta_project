<?php

namespace App\Services;

use App\Models\{
    User,
    FollowingUser,
};

class DestroyFollow
{
    static function Execute(User $user, User $userFollow): array
    {
        $follow = FollowingUser::where(['user_id' => $user->id, 'following_user_id' => $userFollow->id ])->first();

        if (empty($follow)) {
            return ['message' => 'was not found'];
        }

        FollowingUser::where(['user_id' => $user->id, 'following_user_id' => $userFollow->id ])->delete();

        return ['message' => 'ok'];
    }
}
