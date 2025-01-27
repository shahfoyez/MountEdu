<?php

namespace Database\Factories;

use App\Models\WpUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => WpUser::inRandomOrder()->first()->id,
            'api_token' => fake()->uuid(),
            'contact_preference' => fake()->boolean(),
            'sales_mail' => fake()->email(),
            'response_time' => fake()->randomElement([2, 24, 28]),
            'include_weekends' => fake()->boolean(),
            'about_us' => fake()->paragraph(),
            'choose_us' => fake()->paragraph(),
        ];
    }
}
