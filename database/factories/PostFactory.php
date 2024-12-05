<?php

namespace Database\Factories;

use App\Enums\StatusEnum;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $date = fake()->date('Y-m-d h:m:s');
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'commetable' => fake()->randomElement([true, false]),
            'status' => fake()->randomElement(StatusEnum::cases())->value,
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}
