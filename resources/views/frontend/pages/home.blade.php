@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
    <style>
        #top {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #top::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            height: 200px;
            width: 100%;
            background: linear-gradient(to top, #fff, transparent);
            z-index: 1000;
        }

        #man {
            top: inherit;
            bottom: 0;
        }

        section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            pointer-events: none;
        }

        #text {
            position: relative;
            color: white;
            font-size: 10rem;
        }

        #sec {
            padding: 100px;
            padding-bottom: 20px;
        }

        #sec h2 {
            font-size: 4rem;
            margin-bottom: 30px;
            color: #20496a;
        }

        #sec p {
            font-size: 1.2rem;
            line-height: 2rem;
            font-weight: 300;
            color: #20496a;
        }
        /* General styles for smooth animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(100px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 1;
                transform: translateX(-100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 1;
                transform: translateX(200px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Apply animations */
        .animate-bottom {
            animation: fadeInUp 1.2s ease-out forwards;
        }

        .animate-left {
            animation: slideInLeft 1.5s ease-out forwards;
        }

        .animate-right {
            animation: slideInRight 1.5s ease-out forwards;
        }

    </style>
    <div class="container-fluid p-0">
        <section id="top">
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/bg.jpg" id="bg">
            <h2 id="text" class="animate-bottom">MountEdu</h2>
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/man.png" id="man" class="animate-bottom">
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/clouds_1.png" id="clouds_1" class="animate-left">
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/clouds_2.png" id="clouds_2" class="animate-right">
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/mountain_left.png" id="mountain_left" class="animate-left">
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/mountain_right.png" id="mountain_right" class="animate-right">
        </section>


        <section class="text-center" id="sec">
            <h2>Welcome to the MountEdu</h2>
        </section>
    </div>
    <div class="container py-5">
        @if ($courses->isEmpty())
            <p>No courses available.</p>
        @else
            <p>Latest Courses</p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4 wow fadeInRight latest-course-section">
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
                                <h5 class="card-title course-title">{{ $course->title }}</h5>
                                <p class="card-text text-muted course-overview mb-2 lh-base">{{ Str::limit($course->overview, 50) }}</p>
                                <h5 class="card-title">${{ $course->price }}</h5>
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
        @endif
        <div class="d-flex justify-content-center py-4">
            <a href="{{route('courses')}}" class="btn btn-success p-3">More Courses</a>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        // GitHub Repo : https://github.com/aryan-tayal/Mountains-Parallax
        // Live Site : https://aryan-tayal.github.io/Mountains-Parallax/

        const mountainLeft = document.querySelector('#mountain_left');
        const mountainRight = document.querySelector('#mountain_right');
        const cloud1 = document.querySelector('#clouds_1');
        const cloud2 = document.querySelector('#clouds_2');
        const text = document.querySelector('#text');
        const man = document.querySelector('#man');

        window.addEventListener('scroll', () => {
            let value = scrollY;
            mountainLeft.style.left = `-${value / 0.7}px`
            cloud2.style.left = `-${value * 2}px`
            mountainRight.style.left = `${value / 0.7}px`
            cloud1.style.left = `${value * 2}px`
            text.style.bottom = `-${value}px`;
            man.style.height = `${window.innerHeight - value}px`
        })
    </script>
@endsection


