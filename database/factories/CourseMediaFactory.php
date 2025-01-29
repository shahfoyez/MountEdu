<?php

namespace Database\Factories;

use App\Models\CourseSubject;
use App\Models\Provider;
use App\Models\StudyMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseMedia>
 */
class CourseMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // Array of possible file names
        $filePaths = [
            '1(5)', '1(6)', '1(7)', '1(8)', '1(9)', '1(10)', '1(11)', '1(12)', '1(13)', '1(14)'
        ];

        return [
            'name' => "Course Image",
            'file_type' => 'image',
            'file_path' => 'upload/' . $this->faker->randomElement($filePaths),
            'category' => 'course_image',
            'course_id' => Course::query()->inRandomOrder()->value('id'),
        ];
    }
}
