<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\CourseSubject;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
    public function showAllCourses()
    {
        $subjects = CourseSubject::with([
                'children' => function($query) {
                    $query->withCount('course');
                }
            ])
             ->withCount('course')
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
        $subject =(object) [
            'name' => 'All Courses'
        ];

        // Fetch all courses associated with the subject, including its child subjects
        $courses = Course::with([
            'subject',
            'provider',
            'media' => function ($query) {
                $query->where('category', 'course_image');
            }
        ])->where('provider_id', 1)->paginate(12);

        return view('frontend.pages.courses', compact('subject', 'courses', 'subjects'));
    }
    public function showCoursesBySubject($subjectName)
    {
        // Fetch the subject by name (slugged)
        $subject = CourseSubject::where('slug', '=', $subjectName)->first();
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
        if (!$subject) {
            abort(404, 'Subject not found');
        }

        $courses = Course::with([
            'subject',
            'provider',
            'media' => function ($query) {
                $query->where('category', 'course_image');
            }
        ])->where(function ($query) use ($subject) {
             $query->where('subject_id', $subject->id)
                   ->orWhereIn('subject_id', $subject->children->pluck('id'));
         })
         ->where('provider_id', 1)
         ->paginate(12);

        // Pass the subject and courses data to the view
        return view('frontend.pages.courses', compact('subject', 'courses', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
