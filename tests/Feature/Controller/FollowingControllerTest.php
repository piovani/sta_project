<?php

namespace Feature\Controller;

use App\Models\FollowingUser;
use App\Models\User;
use Tests\TestCase;

class FollowingControllerTest extends TestCase
{
    public function test_destroy_follow_true()
    {
        $user = User::factory()->create();
        $following = User::factory()->create();

        FollowingUser::factory()->create([
            'user_id' => $user->id,
            'following_user_id' => $following->id,
        ]);

        $this->assertDatabaseCount(FollowingUser::class, 1);

        $response = $this->postJson('/api/follow/unfollow', [
            'user_id' => $user->id,
            'following_user_id' => $following->id,
        ]);
        $responseArray = json_decode($response->getContent(), true);

        $this->assertEquals($response->status(), 200);
        $this->assertDatabaseCount(FollowingUser::class, 0);
        $this->assertEquals($responseArray, ['message' => 'ok']);
    }

    public function test_destroy_follow_false()
    {
        $user = User::factory()->create();
        $following = User::factory()->create();

        $this->assertDatabaseCount(FollowingUser::class, 0);

        $response = $this->postJson('/api/follow/unfollow', [
            'user_id' => $user->id,
            'following_user_id' => $following->id,
        ]);
        $responseArray = json_decode($response->getContent(), true);

        $this->assertEquals($response->status(), 200);
        $this->assertDatabaseCount(FollowingUser::class, 0);
        $this->assertEquals($responseArray, ['message' => 'was not found']);
    }
}
