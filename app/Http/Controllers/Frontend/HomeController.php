<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseSubject;
use App\Models\Provider;

class HomeController extends Controller
{
    public function index()
    {
        $subjects = CourseSubject::with([
            'children' => function($query) {
                $query->withCount('course');
            }
        ])->withCount('course')
         ->whereNull('parent_id')
         ->get()
         ->map(function($subject) {
             $totalCourses = $subject->course_count;
             foreach ($subject->children as $child) {
                 $totalCourses += $child->course_count;
             }
             $subject->total_course_count = $totalCourses;
             return $subject;
         });

        // Fetch all courses associated with the subject, including its child subjects
        $courses = Course::with([
            'subject',
            'provider',
            'media' => function ($query) {
                $query->where('category', 'course_image');
            }
        ])->where('provider_id', 1)
         ->latest()
         ->limit(8)
         ->get();


        return view('frontend.pages.home', compact('courses', 'subjects'));
    }
    public function profile()
    {
        // Fetch the provider
        $provider = Provider::with('media')->find(1);
        $subjects = CourseSubject::with('children.children.children')
                                 ->whereNull('parent_id')
                                 ->get();
        $courses = Course::with('subject')
                         ->where('provider_id', 1)
                         ->get();

        // Pass grouped data to the view
        return view('frontend.pages.profile', compact('provider', 'subjects', 'courses'));
    }
}
