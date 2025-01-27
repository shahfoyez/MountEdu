<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\CourseSubject;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseSubject>
 */
class CourseSubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = [
            ['name' => 'IT', 'slug' => 'it', 'parent_id' => null],
            ['name' => 'Health', 'slug' => 'health', 'parent_id' => null],
            ['name' => 'Programming', 'slug' => 'programming', 'parent_id' => null],
            ['name' => 'Networking', 'slug' => 'networking', 'parent_id' => null],
            ['name' => 'Nursing', 'slug' => 'nursing', 'parent_id' => null],
            ['name' => 'Language', 'slug' => 'language', 'parent_id' => null],
            ['name' => 'English', 'slug' => 'english', 'parent_id' => null],
            ['name' => 'Japanese', 'slug' => 'japanese', 'parent_id' => null],
            ['name' => 'Business Administration', 'slug' => 'business-administration', 'parent_id' => null],
            ['name' => 'Marketing', 'slug' => 'marketing', 'parent_id' => null],
            ['name' => 'Psychology', 'slug' => 'psychology', 'parent_id' => null],
            ['name' => 'Sociology', 'slug' => 'sociology', 'parent_id' => null],
            ['name' => 'Chemistry', 'slug' => 'chemistry', 'parent_id' => null],
            ['name' => 'Biology', 'slug' => 'biology', 'parent_id' => null],
            ['name' => 'Physics', 'slug' => 'physics', 'parent_id' => null],
            ['name' => 'Mathematics', 'slug' => 'mathematics', 'parent_id' => null],
            ['name' => 'Civil Engineering', 'slug' => 'civil-engineering', 'parent_id' => null],
            ['name' => 'Mechanical Engineering', 'slug' => 'mechanical-engineering', 'parent_id' => null],
            ['name' => 'Electrical Engineering', 'slug' => 'electrical-engineering', 'parent_id' => null],
            ['name' => 'Graphic Design', 'slug' => 'graphic-design', 'parent_id' => null],
            ['name' => 'Architecture', 'slug' => 'architecture', 'parent_id' => null],
            ['name' => 'Philosophy', 'slug' => 'philosophy', 'parent_id' => null],
            ['name' => 'History', 'slug' => 'history', 'parent_id' => null],
        ];

        $subject = $subjects[$this->faker->unique()->numberBetween(0, count($subjects) - 1)];

        return [
            'name' => $subject['name'],
            'slug' => $subject['slug'],
            'parent_id' => $subject['parent_id'],
        ];
    }
}
