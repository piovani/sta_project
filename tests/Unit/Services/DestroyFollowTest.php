<?php

namespace Tests\Unit\Services;

use App\Models\FollowingUser;
use App\Models\User;
use App\Services\DestroyFollow;
use Tests\TestCase;

class DestroyFollowTest extends TestCase
{
    function test_destroy_follow_execute_true()
    {
        $user = User::factory()->create();
        $following = User::factory()->create();

        FollowingUser::factory()->create([
            'user_id' => $user->id,
            'following_user_id' => $following->id,
        ]);

        $this->assertDatabaseCount(FollowingUser::class, 1);

        $res = DestroyFollow::Execute($user, $following);

        $this->assertDatabaseCount(FollowingUser::class, 0);
        $this->assertEquals($res, ['message' => 'ok']);
    }

    function test_destroy_follow_execute_false()
    {
        $user = User::factory()->create();
        $following = User::factory()->create();

        $this->assertDatabaseCount(FollowingUser::class, 0);

        $res = DestroyFollow::Execute($user, $following);

        $this->assertDatabaseCount(FollowingUser::class, 0);
        $this->assertEquals($res, ['message' => 'was not found']);
    }
}
