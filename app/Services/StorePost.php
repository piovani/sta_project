<?php

namespace App\Services;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class StorePost
{
    static function Execute(array $data): array
    {
        $todayInit = Carbon::now()->startOfDay();
        $todayFinishe = Carbon::now()->endOfDay();

        $countPostToday = User::find($data['user_id'])
            ->posts()
            ->whereBetween('created_at', [$todayInit, $todayFinishe])->count();

        if ($countPostToday > 5) {
            return ['message' => 'this user has reached the post limit for today'];
        }

        return Post::create($data)->toArray();
    }
}
