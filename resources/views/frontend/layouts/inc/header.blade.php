{{--{{dd($subjects[0]->children)}}--}}
<header class="navbar navbar-expand-lg navbar-light bg-white navbar-custom sticky-top">
    <div class="container">
{{--        <div class="site-logo">--}}
{{--            <img class="logo-image" src="{{ asset('frontend\assets\images\mountain.png') }}">--}}
{{--            <a class="navbar-brand logo-titile" href="{{ route('home') }}">MountEdu</a>--}}
{{--        </div>--}}
        <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none me-5">
            <img src="{{ asset('frontend/assets/images/mountain.png') }}" alt="MountEdu Logo" class="logo-image me-1">
            <div class="logo-text">
                <p class="navbar-brand logo-title m-0 p-0">MountEdu</p>
                <span class="logo-subtitle d-block lh-base">Learn, Grow, Succeed</span>
            </div>
        </a>
{{--        <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none me-5">--}}
{{--            <img src="{{ asset('frontend/assets/images/mountain.png') }}" alt="MountEdu Logo" class="logo-image me-1">--}}
{{--            <p class="navbar-brand logo-title m-0 p-0">MountEdu</p>--}}
{{--        </a>--}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse foy-navbar justify-content-between" id="navbarNav">
            <ul class="navbar-nav w-100 align-items-center">
                <li class="nav-item search-form me-xl-5">
                    <form class="form-inline">
                        <div class="search-bar p-0">
                            <input class="search-input mr-sm-2 border-0 p-2 rounded" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-dark text-light search-button py-2 px-3" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <!-- Subject Dropdown -->
                <li class="nav-item dropdown subject-dropdown">
                    <div class="btn-group dropright">
                        <a class="nav-link dropdown-toggle" href="#" id="subjectDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Subjects  <i class="fas fa-angle-down ps-1"></i>
                        </a>
                        <ul class="dropdown-menu border-0 main-subjects DropdownFade" aria-labelledby="subjectDropdown">
                            @foreach ($subjects as $subject)
                                <li class="dropdown-submenu">
                                    <a href="{{ url('/subject/' . $subject->slug) }}" class="dropdown-item dropdown-toggle  d-flex py-1 px-3 gap-2">
                                        <img class="subject-image rounded-circle" src="{{ asset($subject->image) }}">
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div>
                                                <p class="main-subject-name p-0 fw-normal lh-1 m-0 text-dark" href="{{ url('/subject/' . $subject->slug) }}">
                                                    {{ $subject->name }}
                                                </p>
                                                <span class="subject-course-count">({{ $subject->total_course_count }} Courses)</span>
                                            </div>
                                            <i class="fas fa-angle-right ms-auto"></i>
                                        </div>

                                        @if ($subject->children && $subject->children->count())
                                            <ul class="dropdown-menu p-2 border-0 rounded-right child-subjects">
                                                @foreach ($subject->children as $child)
                                                    <li class="d-block">
                                                        <a class="dropdown-item text-dark fw-normal" href="{{ url('/subject/' . $child->slug) }}">
                                                            {{ $child->name }}
                                                            <span class="subject-course-count">({{ $child->course_count }} Courses)</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

                <!-- Right-aligned Auth Links -->
                <li class="nav-item ms-lg-auto">
                    @auth
                        <a class="nav-link p-0" href="{{ route('profile') }}">
                            <i class="fa-regular fa-user icon-black"></i>
                        </a>
                    @else
                        <a class="nav-link p-0" href="{{ route('profile') }}">
                            <i class="fa-regular fa-user icon-black"></i>
                        </a>
{{--                        <a class="btn btn-outline-dark" href="{{ route('profile') }}">Login</a>--}}
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</header>

