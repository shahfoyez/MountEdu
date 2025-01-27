<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudyMethod>
 */
class StudyMethodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Online',
                'Offline',
                'Blended Learning',
                'Self-paced',
                'Instructor-led',
            ]),
            'parent_id' => $this->faker->optional()->randomElement(
                \App\Models\StudyMethod::pluck('id')->toArray()
            ),
        ];
    }
}
