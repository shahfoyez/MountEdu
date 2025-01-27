@extends('layouts.master')

@section('title', 'Courses for ' . $subject->name)

@section('content')
    <div class="container py-5 min-vh-100">
        <h1 class="text-center mb-4"> {{ $subject->name }}</h1>

        @if ($courses->isEmpty())
            <p>No courses available for this subject.</p>
        @else
            <p>{{ $courses->count() }} Courses</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($courses as $course)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('assets/img/default/course-default.png') }}" class="card-img-top" alt="Course Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->name }}</h5>
                                <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                                <p class="card-text"><small class="text-muted">{{ $course->subject->name }}</small></p>
                                <h5 class="card-title">${{ $course->price }}</h5>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/course/' .Str::slug($course->name)) }}" class="btn btn-primary">View Course</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
