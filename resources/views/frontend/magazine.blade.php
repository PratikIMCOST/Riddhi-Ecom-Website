<!-- resources/views/magazine.blade.php -->

@extends('layouts.web') <!-- Assuming you have a layout file named web.blade.php -->

@section('title', 'Magazine') <!-- Set the title for the page -->

@section('content')
 <!-- start section -->
 <section class="top-space-margin half-section bg-gradient-very-light-gray">
            <div class="container">
                <div class="row align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <div class="col-12 col-xl-8 col-lg-10 text-center position-relative page-title-extra-large">
                        <h1 class="alt-font fw-600 text-dark-gray mb-10px">Magazine</h1> 
                    </div>
                    <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                        <ul>
                            <li><a href="demo-fashion-store.html">Home</a></li> 
                            <li>Magazine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section --> 
        <!-- start section -->
        <section class="pt-0 ps-7 pe-7 lg-ps-3 lg-pe-3 xs-px-0">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-12">
                        <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Den viliamson</a><a href="#" class="blog-date">26 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Elegance is not standing out, but being remembered.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Katie mcgrath</a><a href="#" class="blog-date">24 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Fashion is the armor to survive the reality of everyday life.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Rosald smith</a><a href="#" class="blog-date">20 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">In order to be irreplaceable one must always be different.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Elizabeth taylor</a><a href="#" class="blog-date">18 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Gucci has represented design and contemporary lifestyle.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Rosald smith</a><a href="#" class="blog-date">16 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">A designer is only as good as star who wears her clothes.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Elizabeth taylor</a><a href="#" class="blog-date">14 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Trying to design the perfect plan is the recipe for style.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Den viliamson</a><a href="#" class="blog-date">12 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Cruelty is fashion statement we can all do without.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Katie mcgrath</a><a href="#" class="blog-date">12 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Music and fashion have to have their own styles It's a must.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Elizabeth taylor</a><a href="#" class="blog-date">10 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">The best accessories to add wardrobe before summer.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Den viliamson</a><a href="#" class="blog-date">08 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">The best accessories to add wardrobe before summer.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Elizabeth taylor</a><a href="#" class="blog-date">08 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Fashion is architecture it is design proportions.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{route ('single-blog')}}"><img src="https://via.placeholder.com/600x455" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px sm-pb-15px">
                                        <span class="mb-5px d-block">By <a href="#" class="text-dark-gray fw-500 categories-text">Den viliamson</a><a href="#" class="blog-date">26 December 2023</a></span>
                                        <a href="{{route ('single-blog')}}" class="alt-font card-title fs-20 lh-30 fw-500 text-dark-gray d-inline-block w-75 xl-w-85 lg-w-100">Recognizing the need is the primary condition for design.</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item --> 
                        </ul>
                        <div class="row">
                            <div class="col-12 mt-2 d-flex justify-content-center">
                                <!-- start pagination -->
                                <ul class="pagination pagination-style-01 fs-13 mb-0" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                                </ul>
                                <!-- end pagination -->
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->

@endsection