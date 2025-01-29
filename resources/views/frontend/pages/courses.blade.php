@extends('frontend.layouts.master')

@section('title', 'Courses for ' . $subject->name)

@section('content')
    <div class="container py-5 min-vh-100">
        <h1 class="text-center mb-4"> {{ $subject->name }}</h1>

        @if ($courses->isEmpty())
            <p>No courses available for this subject.</p>
        @else
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4">
                @foreach ($courses as $course)
                    <div class="col">
                        <div class="card h-100 course-card">

                            @php
                                $course_image = $course->media[0]->file_path ?  asset($course->media[0]->file_path) : asset('assets/img/default/course-default.png');
                            @endphp
                            <img src="{{ $course_image }}" class="card-img-top" alt="Course Image">
                            <div class="card-body">
                                <p class="card-text course-subject mb-1"><small
                                        class="text-muted">{{ $course->subject->name }}</small></p>
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text text-muted course-overview mb-2 lh-base">{{ Str::limit($course->overview, 50) }}</p>
                                <h5 class="card-title ">${{ $course->price }}</h5>
                            </div>
                            <div class="card-footer d-flex gap-2 justify-content-between bg-white">
                                <a href="{{ url('/course/' .Str::slug($course->name)) }}"
                                   class="btn btn-outline-dark view-btn course-button">View Course</a>
                                <a href="{{ url('/course/' .Str::slug($course->name)) }}"
                                   class="btn btn-dark add-to-card course-button">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Bootstrap Pagination -->
            <div class="course-pagination mt-4">
                {{ $courses->onEachSide(2)->links() }}
{{--                {{ $courses->onEachSide(2)->links('pagination::bootstrap-5') }}--}}
            </div>
        @endif
    </div>
@endsection
