<header class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
    <div class="container">
{{--        <div class="site-logo">--}}
{{--            <img class="logo-image" src="{{ asset('frontend\assets\images\mountain.png') }}">--}}
{{--            <a class="navbar-brand logo-titile" href="{{ route('home') }}">MountEdu</a>--}}
{{--        </div>--}}
        <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none me-5">
            <img src="{{ asset('frontend/assets/images/mountain.png') }}" alt="MountEdu Logo" class="logo-image me-1">
            <div class="logo-text">
                <p class="navbar-brand logo-title m-0 p-0">MountEdu</p>
                <span class="logo-subtitle d-block">Learn, Grow, Succeed</span>
            </div>
        </a>
{{--        <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none me-5">--}}
{{--            <img src="{{ asset('frontend/assets/images/mountain.png') }}" alt="MountEdu Logo" class="logo-image me-1">--}}
{{--            <p class="navbar-brand logo-title m-0 p-0">MountEdu</p>--}}
{{--        </a>--}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse foy-navbar" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

                <!-- Subject Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="subjectDropdown" role="button" aria-expanded="false">
                        Subjects
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="subjectDropdown">
                        @foreach ($subjects as $subject)
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="{{ url('/subject/' .$subject->slug) }}">
                                    {{ $subject->name }}
                                </a>
                                @if ($subject->children && $subject->children->count())
                                    <ul class="dropdown-menu">
                                        @foreach ($subject->children as $child)
                                            <li>
                                                <a class="dropdown-item" href="{{ url('/subject/' .$child->slug) }}">
                                                    {{ $child->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item d-flex align-items-center gap-2">
                    <i class="fa-regular fa-user icon-black"></i>
                    <a class="nav-link p-0" href="{{ route('profile') }}">Profile</a>
                </li>
            </ul>
        </div>

    </div>
</header>
