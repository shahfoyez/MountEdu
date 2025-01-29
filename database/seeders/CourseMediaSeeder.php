<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CourseMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePaths = [
            '1(5).webp', '1(6).webp', '1(7).webp', '1(8).webp', '1(9).webp', '1(10).webp', '1(11).webp', '1(12).webp', '1(13).webp', '1(14).webp'
        ];

        // Loop through each course
        Course::all()->each(function ($course) use ($filePaths) {
            CourseMedia::create([
                'name' => 'Course Image',
                'file_type' => 'image',
                'file_path' => 'uploads/' . Arr::random($filePaths),
                'category' => 'course_image',
                'course_id' => $course->id,
            ]);
        });
    }
}
