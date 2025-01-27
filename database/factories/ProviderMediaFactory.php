<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProviderMedia>
 */
class ProviderMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'file_type' => fake()->randomElement(['image', 'video', 'document']),
            'file_path' => '/uploads/' . fake()->randomElement(['logo.webp', 'cover.webp']),
            'title' =>  fake()->randomElement(['logo', 'cover_image']),
            'provider_id' => Provider::inRandomOrder()->first()->id,
        ];
    }
}
