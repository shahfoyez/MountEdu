<?php

namespace Database\Factories;

use App\Models\CourseSubject;
use App\Models\Provider;
use App\Models\StudyMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['online', 'offline', 'hybrid']),
            'title' => $this->faker->sentence(3),
            'subtitle' => $this->faker->sentence(6),
            'duration' => $this->faker->numberBetween(10, 500),
            'study_method_id' => StudyMethod::inRandomOrder()->first()->id,
            'course_format' => $this->faker->randomElement(['self-paced', 'instructor-led']),
            'access_type' => $this->faker->randomElement(['lifetime', 'subscription', 'limited-time']),
            'level' => $this->faker->randomElement(['beginner', 'intermediate', 'advanced']),
            'tutor_support' => $this->faker->boolean(),
            'totum' => $this->faker->boolean(),
            'apprenticeship' => $this->faker->boolean(),
            'guarantee_program' => $this->faker->boolean(),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'discount_price' => $this->faker->optional()->randomFloat(2, 5, 300),
            'discount_start' => $this->faker->optional()->dateTimeBetween('-1 month', 'now'),
            'discount_end' => $this->faker->optional()->dateTimeBetween('now', '+1 month'),
            'overview' => $this->faker->optional()->paragraphs(3, true),
            'description' => $this->faker->optional()->paragraphs(5, true),
            'course_for' => $this->faker->optional()->paragraphs(2, true),
            'requirements' => $this->faker->optional()->paragraphs(2, true),
            'career_path' => $this->faker->optional()->paragraphs(2, true),
            'slug' => $this->faker->slug,
            'provider_id' => Provider::inRandomOrder()->first()->id,
            'subject_id' => CourseSubject::inRandomOrder()->first()->id,
        ];

    }
}
