<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FollowingUser>
 */
class FollowingUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all()->pluck('id')->toArray();

        $user1 = $this->faker->randomElement($users);
        $user2 = null;

        while (is_null($user2)) {
            $userTmp = $this->faker->randomElement($users);

            if ($userTmp != $user1) {
                $user2 = $userTmp;
            }
        }

        return [
            'user_id' => $user1,
            'following_user_id' => $user2,
        ];
    }
}
