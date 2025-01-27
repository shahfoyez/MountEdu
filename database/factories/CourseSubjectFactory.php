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
            ['name' => 'IT', 'slug' => 'it', 'image' => null, 'parent_id' => null],
            ['name' => 'Health', 'slug' => 'health', 'image' => null, 'parent_id' => null],
            ['name' => 'Programming', 'slug' => 'programming', 'image' => null, 'parent_id' => null],
            ['name' => 'Networking', 'slug' => 'networking', 'image' => null, 'parent_id' => null],
            ['name' => 'Nursing', 'slug' => 'nursing', 'image' => null, 'parent_id' => null],
            ['name' => 'Language', 'slug' => 'language', 'image' => null, 'parent_id' => null],
            ['name' => 'English', 'slug' => 'english', 'image' => null, 'parent_id' => null],
            ['name' => 'Japanese', 'slug' => 'japanese', 'image' => null, 'parent_id' => null],
            ['name' => 'Business Administration', 'slug' => 'business-administration', 'image' => null, 'parent_id' => null],
            ['name' => 'Marketing', 'slug' => 'marketing', 'image' => null, 'parent_id' => null],
            ['name' => 'Psychology', 'slug' => 'psychology', 'image' => null, 'parent_id' => null],
            ['name' => 'Sociology', 'slug' => 'sociology', 'image' => null, 'parent_id' => null],
            ['name' => 'Chemistry', 'slug' => 'chemistry', 'image' => null, 'parent_id' => null],
            ['name' => 'Biology', 'slug' => 'biology', 'image' => null, 'parent_id' => null],
            ['name' => 'Physics', 'slug' => 'physics', 'image' => null, 'parent_id' => null],
            ['name' => 'Mathematics', 'slug' => 'mathematics', 'image' => null, 'parent_id' => null],
            ['name' => 'Civil Engineering', 'slug' => 'civil-engineering', 'image' => null, 'parent_id' => null],
            ['name' => 'Mechanical Engineering', 'slug' => 'mechanical-engineering', 'image' => null, 'parent_id' => null],
            ['name' => 'Electrical Engineering', 'slug' => 'electrical-engineering', 'image' => null, 'parent_id' => null],
            ['name' => 'Graphic Design', 'slug' => 'graphic-design', 'image' => null, 'parent_id' => null],
            ['name' => 'Architecture', 'slug' => 'architecture', 'image' => null, 'parent_id' => null],
            ['name' => 'Philosophy', 'slug' => 'philosophy', 'image' => null, 'parent_id' => null],
            ['name' => 'History', 'slug' => 'history', 'image' => null, 'parent_id' => null],
        ];

        $subject = $subjects[$this->faker->unique()->numberBetween(0, count($subjects) - 1)];

        return [
            'name' => $subject['name'],
            'slug' => $subject['slug'],
            'parent_id' => $subject['parent_id'],
        ];
    }
}
