<?php

namespace App\Services;

use App\Models\User;

class ListPostsByUser
{
    static function Execute(User $user, int $page = 1, int $perPage = 10, bool $follow = false): array
    {
        $posts = $user->posts();

        return $posts->paginate($perPage, $columns = ['*'], $pageName = 'page', $page)->toArray();
    }
}
