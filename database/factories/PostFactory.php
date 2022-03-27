<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all()->pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($users),
            'content' => $this->faker->text(777),
        ];
    }
}
