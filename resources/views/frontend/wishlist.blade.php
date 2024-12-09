@extends('layouts.web') 

@section('title', 'Wishlist')

@section('content')

 <!-- start section -->
 <section class="top-space-margin half-section bg-gradient-very-light-gray">
            <div class="container">
                <div class="row align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <div class="col-12 col-xl-8 col-lg-10 text-center position-relative page-title-extra-large">
                        <h1 class="alt-font fw-600 text-dark-gray mb-10px">Wishlist</h1> 
                    </div>
                    <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                        <ul>
                            <li><a href="demo-fashion-store.html">Home</a></li> 
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="shop-modern shop-wrapper grid-loading grid grid-4col xl-grid-3col sm-grid-2col xs-grid-1col gutter-extra-large text-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box mb-10px">
                                    <div class="shop-image mb-20px">
                                        <a href="demo-fashion-store-single-product.html">
                                            <img src="https://via.placeholder.com/600x765" alt=""> 
                                            <span class="lable new">New</span>
                                            <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                            </a>
                                        </div>
                                        <div class="shop-hover d-flex justify-content-center"> 
                                            <ul>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart-on fs-16"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center">
                                        <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Textured sweater</a>
                                        <div class="price lh-22 fs-16"><del>$200.00</del>$189.00</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box mb-10px">
                                    <div class="shop-image mb-20px">
                                        <a href="demo-fashion-store-single-product.html">
                                            <img src="https://via.placeholder.com/600x765" alt=""> 
                                            <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                            </a>
                                        </div>
                                        <div class="shop-hover d-flex justify-content-center"> 
                                            <ul>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart-on fs-16"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center">
                                        <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Traveller shirt</a>
                                        <div class="price lh-22 fs-16"><del>$350.00</del>$289.00</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box mb-10px">
                                    <div class="shop-image mb-20px">
                                        <a href="demo-fashion-store-single-product.html">
                                            <img src="https://via.placeholder.com/600x765" alt=""> 
                                            <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                            </a>
                                        </div>
                                        <div class="shop-hover d-flex justify-content-center"> 
                                            <ul>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart-on fs-16"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center">
                                        <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Crewneck sweatshirt</a>
                                        <div class="price lh-22 fs-16"><del>$220.00</del>$199.00</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box mb-10px">
                                    <div class="shop-image mb-20px">
                                        <a href="demo-fashion-store-single-product.html">
                                            <img src="https://via.placeholder.com/600x765" alt=""> 
                                            <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                            </a>
                                        </div>
                                        <div class="shop-hover d-flex justify-content-center"> 
                                            <ul>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart-on fs-16"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center">
                                        <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Skinny trousers</a>
                                        <div class="price lh-22 fs-16"><del>$300.00</del>$259.00</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box mb-10px">
                                    <div class="shop-image mb-20px">
                                        <a href="demo-fashion-store-single-product.html">
                                            <img src="https://via.placeholder.com/600x765" alt=""> 
                                            <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                            </a>
                                        </div>
                                        <div class="shop-hover d-flex justify-content-center"> 
                                            <ul>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart-on fs-16"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center">
                                        <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Sleeve sweater</a>
                                        <div class="price lh-22 fs-16"><del>$250.00</del>$239.00</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box mb-10px">
                                    <div class="shop-image mb-20px">
                                        <a href="demo-fashion-store-single-product.html">
                                            <img src="https://via.placeholder.com/600x765" alt=""> 
                                            <span class="lable hot">Hot</span>
                                            <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                            </a>
                                        </div>
                                        <div class="shop-hover d-flex justify-content-center"> 
                                            <ul>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart-on fs-16"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center">
                                        <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Pocket sweatshirt</a>
                                        <div class="price lh-22 fs-16"><del>$200.00</del>$189.00</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box mb-10px">
                                    <div class="shop-image mb-20px">
                                        <a href="demo-fashion-store-single-product.html">
                                            <img src="https://via.placeholder.com/600x765" alt=""> 
                                            <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                            </a>
                                        </div>
                                        <div class="shop-hover d-flex justify-content-center"> 
                                            <ul>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart-on fs-16"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center">
                                        <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Cotton sweater</a>
                                        <div class="price lh-22 fs-16"><del>$150.00</del>$129.00</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="shop-box mb-10px">
                                    <div class="shop-image mb-20px">
                                        <a href="demo-fashion-store-single-product.html">
                                            <img src="https://via.placeholder.com/600x765" alt=""> 
                                            <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
                                        </a>
                                        <div class="shop-buttons-wrap">
                                            <a href="demo-fashion-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart">
                                                <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                            </a>
                                        </div>
                                        <div class="shop-hover d-flex justify-content-center"> 
                                            <ul>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart-on fs-16"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="w-40px h-40px bg-white text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="shop-footer text-center">
                                        <a href="demo-fashion-store-single-product.html" class="alt-font text-dark-gray fs-19 fw-500">Texture regular</a>
                                        <div class="price lh-22 fs-16"><del>$170.00</del>$120.00</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end shop item --> 
                        </ul> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

@endsection