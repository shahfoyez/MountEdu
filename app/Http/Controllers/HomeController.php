<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSubject;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $subjects = CourseSubject::with('children.children.children')
                                 ->whereNull('parent_id')
                                 ->get();
        // Fetch all courses associated with the subject, including its child subjects
        $courses = Course::with(['subject', 'provider'])
                         ->where('provider_id', 1)
                         ->latest()
                         ->limit(6)
                         ->get();
        return view('home', compact('courses', 'subjects'));
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
        return view('profile', compact('provider', 'subjects', 'courses'));
    }
}
