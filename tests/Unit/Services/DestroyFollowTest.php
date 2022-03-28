<?php

namespace Tests\Unit\Services;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class DestroyFollowTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_destroy_follow_true()
    {
        $user = User::factory()->create();

        dd($user);

        $this->assertTrue(true);
    }
}
