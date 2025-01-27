<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseSubject;
use App\Models\Provider;
use App\Models\ProviderMedia;
use App\Models\StudyMethod;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\WpUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        WpUser::factory()->count(1)->create();
        Provider::factory()->count(3)->create();
        ProviderMedia::factory()->count(2)->create();
//        CourseSubject::factory()->count(20)->create();
        $this->call([CourseSubjectSeeder::class]);
        StudyMethod::factory()->count(5)->create();
        Course::factory()->count(150)->create();
    }
}
