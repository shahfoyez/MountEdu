<?php

namespace Database\Seeders;

use App\Models\CourseSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // Disable foreign key checks to allow truncation
        DB::statement( 'SET FOREIGN_KEY_CHECKS=0;' );
        // Truncate the table
        CourseSubject::truncate();
        // Re-enable foreign key checks
        DB::statement( 'SET FOREIGN_KEY_CHECKS=1;' );

        $subject_images = [
            'business.svg',
            'education.svg',
            'engineering.svg',
            'health.svg',
            'it.svg',
            'language.svg',
            'management.svg',
            'marketing.svg',
            'personal-development.svg'
        ];

        // Function to get a random image
        function getRandomImage( $images ) {
            $randomKey = array_rand( $images );
            return 'uploads/' . $images[ $randomKey ];
        }

        // Insert parent subjects
        $it               = CourseSubject::create( [
            'name'  => 'IT',
            'slug'  => 'it',
            'image' => getRandomImage( $subject_images )
        ] );
        $health           = CourseSubject::create( [
            'name'  => 'Health',
            'slug'  => 'health',
            'image' => getRandomImage( $subject_images )
        ] );
        $language         = CourseSubject::create( [
            'name'  => 'Language',
            'slug'  => 'language',
            'image' => getRandomImage( $subject_images )
        ] );
        $businessAdmin    = CourseSubject::create( [
            'name'  => 'Business Administration',
            'slug'  => 'business-administration',
            'image' => getRandomImage( $subject_images )
        ] );
        $psychology       = CourseSubject::create( [
            'name'  => 'Psychology',
            'slug'  => 'psychology',
            'image' => getRandomImage( $subject_images )
        ] );
        $chemistry        = CourseSubject::create( [
            'name'  => 'Chemistry',
            'slug'  => 'chemistry',
            'image' => getRandomImage( $subject_images )
        ] );
        $physics          = CourseSubject::create( [
            'name'  => 'Physics',
            'slug'  => 'physics',
            'image' => getRandomImage( $subject_images )
        ] );
        $mathematics      = CourseSubject::create( [
            'name'  => 'Mathematics',
            'slug'  => 'mathematics',
            'image' => getRandomImage( $subject_images )
        ] );
        $civilEngineering = CourseSubject::create( [
            'name'  => 'Civil Engineering',
            'slug'  => 'civil-engineering',
            'image' => getRandomImage( $subject_images )
        ] );
        $graphicDesign    = CourseSubject::create( [
            'name'  => 'Graphic Design',
            'slug'  => 'graphic-design',
            'image' => getRandomImage( $subject_images )
        ] );
        $philosophy       = CourseSubject::create( [
            'name'  => 'Philosophy',
            'slug'  => 'philosophy',
            'image' => getRandomImage( $subject_images )
        ] );
        $history          = CourseSubject::create( [
            'name'  => 'History',
            'slug'  => 'history',
            'image' => getRandomImage( $subject_images )
        ] );

        // Insert child subjects with parent_id references
        $programming        = CourseSubject::create( [
            'name'      => 'Programming',
            'slug'      => 'programming',
            'parent_id' => $it->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $networking         = CourseSubject::create( [
            'name'      => 'Networking',
            'slug'      => 'networking',
            'parent_id' => $it->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $data_science       = CourseSubject::create( [
            'name'      => 'Data Science',
            'slug'      => 'data-science',
            'parent_id' => $it->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $aws                = CourseSubject::create( [
            'name'      => 'AWS',
            'slug'      => 'aws',
            'parent_id' => $it->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $ccna               = CourseSubject::create( [
            'name'      => 'CCNA',
            'slug'      => 'ccna',
            'parent_id' => $it->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $information_system = CourseSubject::create( [
            'name'      => 'Information System',
            'slug'      => 'information-system',
            'parent_id' => $it->id,
            'image'     => getRandomImage( $subject_images )
        ] );

        $nursing      = CourseSubject::create( [
            'name'      => 'Nursing',
            'slug'      => 'nursing',
            'parent_id' => $health->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $nutrition    = CourseSubject::create( [
            'name'      => 'Nutrition',
            'slug'      => 'nutrition',
            'parent_id' => $health->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $food_safety  = CourseSubject::create( [
            'name'      => 'Food Safety',
            'slug'      => 'food-safety',
            'parent_id' => $health->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $hygiene      = CourseSubject::create( [
            'name'      => 'Hygiene',
            'slug'      => 'hygiene',
            'parent_id' => $health->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $pharmacology = CourseSubject::create( [
            'name'      => 'Pharmacology',
            'slug'      => 'pharmacology',
            'parent_id' => $health->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $disability   = CourseSubject::create( [
            'name'      => 'Disability',
            'slug'      => 'disability',
            'parent_id' => $health->id,
            'image'     => getRandomImage( $subject_images )
        ] );

        $english  = CourseSubject::create( [
            'name'      => 'English',
            'slug'      => 'english',
            'parent_id' => $language->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $japanese = CourseSubject::create( [
            'name'      => 'Japanese',
            'slug'      => 'japanese',
            'parent_id' => $language->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $spanish  = CourseSubject::create( [
            'name'      => 'Spanish',
            'slug'      => 'spanish',
            'parent_id' => $language->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $french   = CourseSubject::create( [
            'name'      => 'French',
            'slug'      => 'french',
            'parent_id' => $language->id,
            'image'     => getRandomImage( $subject_images )
        ] );

        $marketing = CourseSubject::create( [
            'name'      => 'Marketing',
            'slug'      => 'marketing',
            'parent_id' => $businessAdmin->id,
            'image'     => getRandomImage( $subject_images )
        ] );

        $sociology = CourseSubject::create( [
            'name'      => 'Sociology',
            'slug'      => 'sociology',
            'parent_id' => $psychology->id,
            'image'     => getRandomImage( $subject_images )
        ] );

        $biology     = CourseSubject::create( [
            'name'      => 'Biology',
            'slug'      => 'biology',
            'parent_id' => $chemistry->id,
            'image'     => getRandomImage( $subject_images )
        ] );
        $mathematics = CourseSubject::create( [
            'name'      => 'Mathematics',
            'slug'      => 'mathematics',
            'parent_id' => $mathematics->id,
               'image'     => getRandomImage( $subject_images )
        ] );

        $mechanicalEngineering = CourseSubject::create( [
            'name'      => 'Mechanical Engineering',
            'slug'      => 'mechanical-engineering',
            'parent_id' => $civilEngineering->id,
               'image'     => getRandomImage( $subject_images )
        ] );
        $electricalEngineering = CourseSubject::create( [
            'name'      => 'Electrical Engineering',
            'slug'      => 'electrical-engineering',
            'parent_id' => $civilEngineering->id,
            'image'     => getRandomImage( $subject_images )
        ] );

        $architecture = CourseSubject::create( [
            'name'      => 'Architecture',
            'slug'      => 'architecture',
            'parent_id' => $graphicDesign->id,
            'image'     => getRandomImage( $subject_images )
        ] );
    }





//    public function run(): void
//    {
//        // Disable foreign key checks to allow truncation
//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//        // Truncate the table
//        CourseSubject::truncate();
//        // Re-enable foreign key checks
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
//
//        $subject_images = array('business.svg', 'education.svg','engineering.svg', 'health.svg', 'it.svg', 'language.svg', 'management.svg', 'marketing.svg', 'personal-development');
//        // Insert parent subjects
//        $it = CourseSubject::create(['name' => 'IT', 'slug' => 'it']);
//        $health = CourseSubject::create(['name' => 'Health', 'slug' => 'health']);
//        $language = CourseSubject::create(['name' => 'Language', 'slug' => 'language']);
//        $businessAdmin = CourseSubject::create(['name' => 'Business Administration', 'slug' => 'business-administration']);
//        $psychology = CourseSubject::create(['name' => 'Psychology', 'slug' => 'psychology']);
//        $chemistry = CourseSubject::create(['name' => 'Chemistry', 'slug' => 'chemistry']);
//        $physics = CourseSubject::create(['name' => 'Physics', 'slug' => 'physics']);
//        $mathematics = CourseSubject::create(['name' => 'Mathematics', 'slug' => 'mathematics']);
//        $civilEngineering = CourseSubject::create(['name' => 'Civil Engineering', 'slug' => 'civil-engineering']);
//        $graphicDesign = CourseSubject::create(['name' => 'Graphic Design', 'slug' => 'graphic-design']);
//        $philosophy = CourseSubject::create(['name' => 'Philosophy', 'slug' => 'philosophy']);
//        $history = CourseSubject::create(['name' => 'History', 'slug' => 'history']);
//
//        // Insert child subjects with parent_id references
//        $programming = CourseSubject::create(['name' => 'Programming', 'slug' => 'programming', 'parent_id' => $it->id]);
//        $networking = CourseSubject::create(['name' => 'Networking', 'slug' => 'networking', 'parent_id' => $it->id]);
//        $data_science = CourseSubject::create(['name' => 'Data Science', 'slug' => 'data-science', 'parent_id' => $it->id]);
//        $aws = CourseSubject::create(['name' => 'AWS', 'slug' => 'aws', 'parent_id' => $it->id]);
//        $ccna = CourseSubject::create(['name' => 'CCNA', 'slug' => 'ccna', 'parent_id' => $it->id]);
//        $information_system = CourseSubject::create(['name' => 'Information System', 'slug' => 'information-system', 'parent_id' => $it->id]);
//
//
//        $nursing = CourseSubject::create(['name' => 'Nursing', 'slug' => 'nursing', 'parent_id' => $health->id]);
//        $nutrition = CourseSubject::create(['name' => 'Nutrition', 'slug' => 'nutrition', 'parent_id' => $health->id]);
//        $food_safety = CourseSubject::create(['name' => 'Food Safety', 'slug' => 'food-safety', 'parent_id' => $health->id]);
//        $hygiene = CourseSubject::create(['name' => 'Hygiene', 'slug' => 'hygiene', 'parent_id' => $health->id]);
//        $pharmacology = CourseSubject::create(['name' => 'Pharmacology', 'slug' => 'pharmacology', 'parent_id' => $health->id]);
//        $disability = CourseSubject::create(['name' => 'Disability', 'slug' => 'disability', 'parent_id' => $health->id]);
//
//
//        $english = CourseSubject::create(['name' => 'English', 'slug' => 'english', 'parent_id' => $language->id]);
//        $japanese = CourseSubject::create(['name' => 'Japanese', 'slug' => 'japanese', 'parent_id' => $language->id]);
//        $spanish = CourseSubject::create(['name' => 'Spanish', 'slug' => 'spanish', 'parent_id' => $language->id]);
//        $french = CourseSubject::create(['name' => 'French', 'slug' => 'french', 'parent_id' => $language->id]);
//
//
//        $marketing = CourseSubject::create(['name' => 'Marketing', 'slug' => 'marketing', 'parent_id' => $businessAdmin->id]);
//
//        $sociology = CourseSubject::create(['name' => 'Sociology', 'slug' => 'sociology', 'parent_id' => $psychology->id]);
//
//        $biology = CourseSubject::create(['name' => 'Biology', 'slug' => 'biology', 'parent_id' => $chemistry->id]);
//
//        $mathematics = CourseSubject::create(['name' => 'Mathematics', 'slug' => 'mathematics', 'parent_id' => $mathematics->id]);
//
//        $mechanicalEngineering = CourseSubject::create(['name' => 'Mechanical Engineering', 'slug' => 'mechanical-engineering', 'parent_id' => $civilEngineering->id]);
//        $electricalEngineering = CourseSubject::create(['name' => 'Electrical Engineering', 'slug' => 'electrical-engineering', 'parent_id' => $civilEngineering->id]);
//
//        $architecture = CourseSubject::create(['name' => 'Architecture', 'slug' => 'architecture', 'parent_id' => $graphicDesign->id]);
//    }
}
