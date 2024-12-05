<?php

namespace Database\Factories;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        $date = fake()->date('Y-m-d h:m:s');
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'status' =>  fake()->randomElement(StatusEnum::cases())->value,
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}
