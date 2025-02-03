@extends('frontend.layouts.master')

@section('title', 'Courses for ' . $subject->name)
<style>
    /*@keyframes fadeInRightFilter {*/
    /*    from {*/
    /*        opacity: 0;*/
    /*        transform: translateX(100%);*/
    /*    }*/
    /*    to {*/
    /*        opacity: 1;*/
    /*        transform: translateX(0);*/
    /*    }*/
    /*}*/
    /*@keyframes fadeInLeftFilter {*/
    /*    from {*/
    /*        opacity: 0;*/
    /*        transform: translateX(0);*/
    /*    }*/
    /*    to {*/
    /*        opacity: 1;*/
    /*        transform: translateX(100%);*/
    /*    }*/
    /*}*/
     .fadeInRightFilter{
         visibility: hidden;
         transition-timing-function: linear;
         transition: .4s cubic-bezier(.2,0,.38,.9);
         transform: translateX(-100%) !important;
         /*overflow: hidden;*/
         /*width: 0% !important;*/
    }
     .fadeInLeftFilter {
         transition-timing-function: linear;
         transition: .4s cubic-bezier(.2,0,.38,.9);
         transform: translateX(0%) !important;
         visibility: visible;
         /*overflow: hidden;*/
    }
    .fadeInLeftC {
        transition: width 0.4s linear;
        /*transform-origin: right; !* Keep the right side fixed *!*/
        transform: translateX(0); /* Maintain position */
    }

    .fadeInRightC {
        transition: width 0.8s linear;
        /*transform-origin: right; !* Keep the right side fixed *!*/
        transform: translateX(0); /* Maintain position */
        /*width: 100% !important; !* Expands from right to left *!*/
    }

    /* .fadeInRightEE{*/
    /*     transition-timing-function: linear;*/
    /*     transition: .4s cubic-bezier(.2,0,.38,.9);*/
    /*     !*transform: translateX(-100%) !important;*!*/
    /*     !*overflow: hidden;*!*/
    /* }*/
    /* .fadeInLeftEE{*/
    /*     transition-timing-function: linear;*/
    /*     transition: .4s cubic-bezier(.2,0,.38,.9);*/
    /*}*/
    #filter-form {
        /*animation: fadeInRightFilter;*/
        animation-duration: 0.4s;
    }
    #course-section {
        animation-duration: 0.4s;
    }
    @media only screen and (min-width: 992px) {
        /*.fadeInRight{*/
        /*    margin-top: -325px !important;*/
        /*}*/
    }
    @media only screen and (max-width: 991px) {
        #filter-form {
            /*display: none;*/
            position: fixed;
            right: 0;
            top: 0;
            bottom: 0;
            width: 300px;
            z-index: 1050;
            background: #fff;
        }
        #filter-form {
            /*animation: fadeInRightFilter;*/
            /*animation-duration: 0.2s;*/
            transform: translateX(100%);
        }
        .fadeInRightFilter{
            transition-timing-function: ease-out;
            transition: 0.4s;
            transform: translateX(0%) !important;
            visibility: visible;
        }

        .fadeInLeftFilter {
            transition-timing-function: ease-in;
            transition: 0.4s;
            transform: translateX(100%) !important;
            visibility: hidden;
        }
        .filter-form-content{
            animation: fadeIn;
            animation-duration: 1s;
        }
        #course-section {
            animation: none;
        }
    }
    .container {
        position: relative;
        /*width: 100%;*/
        /*height: 200px; !* Adjust based on your need *!*/
        /*background-color: #f0f0f0; !* For visualization *!*/
        overflow: hidden;
    }

    #course-section {
        position: absolute;
        right: 0;
        /*top: 0;*/
        /*height: 100%;*/
        /*background-color: #ff885e;*/
        transition: width 0.4s linear; /* Smooth transition */
    }
    #toggleFilter{
        margin-top: -100px;
    }
</style>
@section('content')
    <div class="container py-5 min-vh-100 overflow-hidden">
        <div class="row">
            <div class="col">
                <h1 class="text-center mb-4"> {{ $subject->name }}</h1>
                <div class="container">
                    <div class="section"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Toggle Filter Button -->
            <div class="col-md-12 text-left mb-4">
                <button id="toggleFilter" class="btn btn-primary">Toggle Filters</button>
            </div>

            <!-- Filter Section -->
            <div class="col-lg-3 col-xl-3 default" id="filter-form">
                <div class="border p-3 filter-form-content">
                    <h5 class="mb-4">Filters</h5>
                    <!-- Categories Filter Section -->
                    <div class="filter-section mb-4">
                        <button class="btn btn-link filter-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#categoriesFilter" aria-expanded="false" aria-controls="categoriesFilter">
                            Categories
                        </button>
                        <div id="categoriesFilter" class="collapse">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="development" name="categories[]" id="development" {{ in_array('development', request('categories', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="development">Development</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="business" name="categories[]" id="business" {{ in_array('business', request('categories', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="business">Business</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="marketing" name="categories[]" id="marketing" {{ in_array('marketing', request('categories', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="marketing">Marketing</label>
                            </div>
                        </div>
                    </div>

                    <!-- Price Range Filter Section -->
                    <div class="filter-section mb-4 border-bottom">
                        <button class="btn btn-link filter-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#priceRangeFilter" aria-expanded="false" aria-controls="priceRangeFilter">
                            Price Range
                        </button>
                        <div id="priceRangeFilter" class="collapse">
                            <div class="d-flex gap-2">
                                <input type="number" name="min_price" class="form-control" placeholder="Min Price" value="{{ request('min_price') }}">
                                <input type="number" name="max_price" class="form-control" placeholder="Max Price" value="{{ request('max_price') }}">
                            </div>
                        </div>
                    </div>

                    <!-- Level Filter Section -->
                    <div class="filter-section mb-4 border-bottom">
                        <button class="btn btn-link filter-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#levelFilter" aria-expanded="false" aria-controls="levelFilter">
                            Level
                        </button>
                        <div id="levelFilter" class="collapse">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="beginner" name="level[]" id="beginner" {{ in_array('beginner', request('level', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="beginner">Beginner</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="intermediate" name="level[]" id="intermediate" {{ in_array('intermediate', request('level', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="intermediate">Intermediate</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="expert" name="level[]" id="expert" {{ in_array('expert', request('level', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="expert">Expert</label>
                            </div>
                        </div>
                    </div>

                    <!-- Apply Button -->
                    <button type="submit" class="btn btn-dark w-100 mt-3">Apply Filters</button>
                </div>
            </div>

            <!-- Courses Section -->
            <div class="col-md-12 col-lg-9 col-xl-9" id="course-section" data-wow-no-animate="true">
                @if ($courses->isEmpty())
                    <p>No courses available for this subject.</p>
                @else
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 g-4" id="course-row">
                        @foreach ($courses as $course)
                            <div class="col">
                                <div class="card h-100 course-card">
                                    @php
                                        $course_image = $course->media[0]->file_path ?  asset($course->media[0]->file_path) : asset('assets/img/default/course-default.png');
                                    @endphp
                                    <img src="{{ $course_image }}" class="card-img-top" alt="Course Image">
                                    <div class="card-body">
                                        <p class="card-text course-subject mb-1"><small class="text-muted">{{ $course->subject->name }}</small></p>
                                        <h5 class="card-title">{{ $course->title }}</h5>
                                        <p class="card-text text-muted course-overview mb-2 lh-base">{{ Str::limit($course->overview, 50) }}</p>
                                        <h5 class="card-title ">${{ $course->price }}</h5>
                                    </div>
                                    <div class="card-footer d-flex gap-2 justify-content-between bg-white">
                                        <a href="{{ url('/course/' .Str::slug($course->name)) }}" class="btn btn-outline-dark view-btn course-button">View Course</a>
                                        <a href="{{ url('/course/' .Str::slug($course->name)) }}" class="btn btn-dark add-to-card course-button">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Bootstrap Pagination -->
                    <div class="course-pagination mt-4">
                        {{ $courses->onEachSide(2)->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        document.getElementById('toggleFilter').addEventListener('click', function () {
            var filterForm = document.getElementById('filter-form');
            var courseSection = document.getElementById('course-section');
            var courseRow = document.getElementById('course-row');
            var wraper = document.querySelector('.main_wrapper');
            // Toggle the visibility of the filter form
            // filterForm.style.display = window.getComputedStyle(filterForm).display === 'none' ? 'block' : 'none';
            // filterForm.style.display = window.getComputedStyle(filterForm).display === 'none' ? 'block' : 'none';
            // Adjust the course section and row based on filter visibility

            if (filterForm.classList.contains('fadeInLeftFilter') || filterForm.classList.contains('default')) {
                courseSection.classList.remove('fadeInLeftC');
                courseSection.classList.add('fadeInRightC');
                filterForm.classList.remove('fadeInLeftFilter', 'default');
                filterForm.classList.add('fadeInRightFilter');

                courseSection.classList.remove('col-md-12', 'col-lg-9', 'col-xl-9');
                courseSection.classList.add('col-md-12', 'col-lg-12', 'col-xl-12');
                // Change the column count for large screens to 4
                courseRow.classList.remove('row-cols-xl-3');
                courseRow.classList.add('row-cols-xl-4');
            } else {
                courseSection.classList.remove('fadeInRightC');
                courseSection.classList.add('fadeInLeftC');
                filterForm.classList.remove('fadeInRightFilter');
                filterForm.classList.add('fadeInLeftFilter');

                // When the filter is visible, reset the course section layout
                courseSection.classList.remove('col-md-12', 'col-lg-12', 'col-xl-12');
                courseSection.classList.add('col-md-12', 'col-lg-9', 'col-xl-9');
                // Reset the column count for large screens to 3
                courseRow.classList.remove('row-cols-xl-4');
                courseRow.classList.add('row-cols-xl-3');
            }
        });
        function expand() {
            document.querySelector('.section').classList.add('expand');
            document.querySelector('.section').classList.remove('shrink');
        }

        function shrink() {
            document.querySelector('.section').classList.add('shrink');
            document.querySelector('.section').classList.remove('expand');
        }

    </script>
@endsection
