@extends('frontend.layouts.master')
@section('title','Blog')
@section('content')

        <header class="site-header parallax-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-7">
                        <h2 class="title">{{ $categoryName ?? "Blog" }}</h2>
                    </div>
                    @if(!$categoryName)
                        <div class="col-sm-5">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Blog</li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </header>
        <section class="blog-category-section">
            <div class="container wow fadeInDown">
                <div class="row">
                    <div class="col">
                        <div class="category-slider">
                            <a class="blog-category-home {{ $categoryName ? '' : 'active' }}" href="{{ route('blog') }}" class="blog-category-link">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </a>

                            @foreach ($categories as $category)
                                <a href="{{ route('blog', $category->id) }} {{ $categoryName === $category->name ? 'active' : '' }}" class="blog-category-link">
                                    <div class="category-item">
                                        <p class="{{ $categoryName ==  $category->name ? 'active' : '' }}">{{ $category->name }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Blogs-Area-Start -->
        <section class="blog-area section-padding wow fadeInRight">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-xl-3 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <a href="{{route('show.blog',$blog->id)}}" class="mouse-dir">
                                    <img src="{{asset($blog->image)}}" alt="">
                                </a>
                            </figure>
                            <div class="foy-blog-meta">
                                <span class="author"><a href="#">{{ $blog->getAuthor->name }}</a></span>
                                <span>-</span>
                                <span class="published-date">{{ $blog->created_at->format('F j, Y') }}</span>
                            </div>
                            <div class="blog-content">
                                <h3 class="title"><a href="{{route('show.blog', $blog->id)}}">{{$blog->title}}</a></h3>
                                <div class="desc">
                                    {!! Str::limit(strip_tags($blog->description), 100, '...') !!}
                                </div>
                                <a href="{{route('show.blog',$blog->id)}}" class="button-primary-trans mouse-dir read-more">
                                    Read More <span class="dir-part"></span> <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <nav class="navigation pagination blog-pagination">
                            <div class="nav-links d-flex justify-content-center">
                                {{$blogs->links()}}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blogs-Area-End -->
        <script>
            $(document).ready(function () {
                $('.category-slider').slick({
                    infinite: true,
                    slidesToShow: 4, // Number of items visible at a time
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: true, // Show previous/next arrows
                    dots: true,   // Show dots for navigation
                    responsive: [
                        {
                            breakpoint: 768, // Mobile view
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480, // Smaller mobile view
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
        </script>
        <!-- Quote-Area-Start -->
        @include('frontend.pages.widgets.quote')
        <!-- Quote-Area-End -->
@endsection
