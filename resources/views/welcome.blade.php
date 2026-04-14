@extends('layouts.master')
@section('content')


    <!--=========================
        BANNER 2 START
    ==========================-->
    <section class="banner_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-2  d-none d-xxl-block">
                    <ul class="menu_cat_item">
@foreach ($categorys as $category)
    <li>
        <a href="{{ route('shop.page') }}">
            <span>
                <img src="{{ asset('images/categories/' . $category->image) }}" alt="category">
            </span>
            {{ $category->name }}
        </a>

      @if($category->subcategories && $category->subcategories->count() > 0)
            <ul class="menu_cat_droapdown">
                @foreach ($category->subcategories as $subcat)
                    <li>
                        <a href="{{ route('shop.page') }}">{{ $subcat->name }} <i class="fal fa-angle-right"></i></a>
                        <!-- If you have a third level (child categories), loop here -->
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach





                        <li class="all_category">
                            <a href="{{ route('all.categoy') }}">View All Categories <i class="far fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xxl-7 col-lg-8">
                    <div class="banner_content">
                        <div class="row banner_2_slider">
                            <div class="col-xl-12">
                                <div class="banner_slider_2 wow fadeInUp"
                                    style="background: url({{asset('asset')}}/images/slider_1.jpg);">
                                    <div class="banner_slider_2_text">
                                        <h3>New arrivals of 2025</h3>
                                        <h1>Where Fashion Meets Individuality</h1>
                                        <a class="common_btn" href="shop_details.html">shop now <i
                                                class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="banner_slider_2 wow fadeInUp"
                                    style="background: url({{asset('asset')}}/images/slider_2.jpg);">
                                    <div class="banner_slider_2_text">
                                        <h3>Trending of this month</h3>
                                        <h1>make your fashion look more changing</h1>
                                        <a class="common_btn" href="shop_details.html">shop now <i
                                                class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="banner_slider_2 wow fadeInUp"
                                    style="background: url({{asset('asset')}}/images/slider_3.jpg);">
                                    <div class="banner_slider_2_text">
                                        <h3>Best selling of 2025</h3>
                                        <h1>Discover ypur Best fitting Clothes</h1>
                                        <a class="common_btn" href="shop_details.html">shop now <i
                                                class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="banner_2_add wow fadeInUp"
                                style="background: url({{asset('asset')}}/images/banner_3_add_bg_1.jpg);">
                                <div class="text">
                                    <h4>Summer Offer</h4>
                                    <h2>Make Your Fashion Story Unique Every Day</h2>
                                    <a class="common_btn" href="shop_details.html">shop now <i
                                            class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BANNER 2 END
    ==========================-->


    <!--============================
        FEATURES START
    ==============================-->
    <section class="features mt_20">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 wow fadeInUp">
                    <div class="features_item purple">
                        <div class="icon">
                            <img src="{{asset('asset')}}/images/feature-icon_1.svg" alt="feature">
                        </div>
                        <div class="text">
                            <h3>Return & refund</h3>
                            <p>Money back guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp">
                    <div class="features_item green">
                        <div class="icon">
                            <img src="{{asset('asset')}}/images/feature-icon_3.svg" alt="feature">
                        </div>
                        <div class="text">
                            <h3>Quality Support</h3>
                            <p>Always online 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp">
                    <div class="features_item orange">
                        <div class="icon">
                            <img src="{{asset('asset')}}/images/feature-icon_2.svg" alt="feature">
                        </div>
                        <div class="text">
                            <h3>Secure Payment</h3>
                            <p>30% off by subscribing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp">
                    <div class="features_item">
                        <div class="icon">
                            <img src="{{asset('asset')}}/images/feature-icon_4.svg" alt="feature">
                        </div>
                        <div class="text">
                            <h3>Daily Offers</h3>
                            <p>20% off by subscribing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        FEATURES END
    ==============================-->


    <!--============================
        FLASH SELL 2 START
    ==============================-->
    <section class="flash_sell_2 flash_sell mt_95">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-md-3 col-xl-4">
                    <div class="section_heading_2 section_heading">
                        <h3><span>Flash</span> Sell</h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-9 col-xl-8">
                    <div class="d-flex flex-wrap justify-content-end">
                        <div class="simply-countdown simply-countdown-one"></div>
                        <div class="view_all_btn_area">
                            <a class="view_all_btn" href="{{ url('/flash/deals/index')}}">View all</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt_25 flash_sell_2_slider">
                <div class="col-xl-1-5 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_1.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="discount"> <b>-</b> 75%</li>
                                <li class="new"> new</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">Full Sleeve Hoodie Jacket</a>
                            <p class="price">$40.00 <del>$48.00</del></p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(20 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#1C58F2"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_24.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="discount"> <b>-</b> 45%</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">Denim casual blazer for men</a>
                            <p class="price">$120.00 <del>$99.00</del></p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(17 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_3.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="discount"> <b>-</b> 15%</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">Women's Western Party Dress</a>
                            <p class="price">$50.00 <del>$40.00</del></p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(22 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#638C34"></li>
                                <li style="background:#1C58F2"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_26.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="discount"> <b>-</b> 75%</li>
                                <li class="new"> new</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">tops pant beautiful dress</a>
                            <p class="price">$75.00 <del>$69.00</del></p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(58 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#1C58F2"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_8.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="discount"> <b>-</b> 49%</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                            <p class="price">$49.00 <del>$39.00</del></p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(44 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#1C58F2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_19.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="discount"> <b>-</b> 62%</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">Men's premium formal shirt</a>
                            <p class="price">$41.00 <del>$59.00</del></p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(98 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#1C58F2"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        FLASH SELL 2 END
    ==============================-->


    <!--============================
        CATEGORY 2 START
    ==============================-->
    <section class="category category_2 mt_55">
        <div class="container">
            <div class="row category_2_slider">

                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_2.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3> Men's Fashion</h3>
                    </a>
                </div>

                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_3.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3>women's Fashion</h3>
                    </a>
                </div>
                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_1.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3>kids fashion</h3>
                    </a>
                </div>
                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_4.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3>kids fashion</h3>
                    </a>
                </div>
                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_5.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3>kids fashion</h3>
                    </a>
                </div>
                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_6.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3>kids fashion</h3>
                    </a>
                </div>
                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_7.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3>kids fashion</h3>
                    </a>
                </div>
                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_2.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3> Men's Fashion</h3>
                    </a>
                </div>
                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_3.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3>women's Fashion</h3>
                    </a>
                </div>
                <div class="col-2 wow fadeInUp">
                    <a href="shop.html" class="category_item">
                        <div class="img">
                            <img src="{{asset('asset')}}/images/category_img_1.png" alt="Category" class="img-fluid w-100">
                        </div>
                        <h3>kids fashion</h3>
                    </a>
                </div>


            </div>
        </div>
    </section>
    <!--============================
        CATEGORY 2 END
    ==============================-->


    <!--============================
        SPECIAL PRODUCT 2 START
    ==============================-->
    <section class="special_product_2 pt_85">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-9">
                    <div class="section_heading_2 section_heading">
                        <h3>Our <span>Spatial</span> Brand Products</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-3">
                    <div class="view_all_btn_area">
                        <a class="view_all_btn" href="shop.html">View all</a>
                    </div>
                </div>
            </div>

            <div class="row pt_15">
                <div class="col-xl-4  wow fadeInLeft">
                    <div class="special_product_banner">
                        <img src="{{asset('asset')}}/images/home2_special_banner.jpg" alt="special product" class="img-fluid w-100">
                        <div class="text">
                            <h3>make your fashion look more changing</h3>
                            <p>Get 50% Off on Selected Clothing Items</p>
                            <a class="common_btn" href="shop_details.html">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-md-6 wow fadeInUp">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{asset('asset')}}/images/product_30.png" alt="product" class="img-fluid w-100">
                                    <span class="discount">save $50</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Men's premium formal pant</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$29.00 <del>$32.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{asset('asset')}}/images/product_1.png" alt="product" class="img-fluid w-100">
                                    <span class="discount">save $39</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Full Sleeve Hoodie Jacket</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$20.00 <del>$22.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{asset('asset')}}/images/product_2.png" alt="product" class="img-fluid w-100">
                                    <span class="discount">save $45</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Kids cotton Combo Set</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$16.00 <del>$18.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{asset('asset')}}/images/product_27.png" alt="product" class="img-fluid w-100">
                                    <span class="discount">save $20</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Men's trendy formal shoes</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$10.00 <del>$12.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{asset('asset')}}/images/product_28.png" alt="product" class="img-fluid w-100">
                                    <span class="discount">save $40</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Men's T-shirt combo set </a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$17.00 <del>$20.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{asset('asset')}}/images/product_29.png" alt="product" class="img-fluid w-100">
                                    <span class="discount">save $19</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Women's T-shirt combo</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$13.00 <del>$15.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{asset('asset')}}/images/product_30.png" alt="product" class="img-fluid w-100">
                                    <span class="discount">save $50</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Men's premium formal pant</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$29.00 <del>$32.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{asset('asset')}}/images/product_1.png" alt="product" class="img-fluid w-100">
                                    <span class="discount">save $39</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Men's Fashionable Hoodie</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$20.00 <del>$22.00</del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        SPECIAL PRODUCT 2 END
    ==============================-->


    <!--============================
        TRENDING PRODUCT 2 START
    ==============================-->
    <section class="trending_product_2 mt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section_heading_2 section_heading mb_15">
                        <h3><span>Trending</span> Products</h3>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-12">
                    <div class="product_tabs">
                        <div data-pws-tab="tab111" data-pws-tab-name="western">
                            <div class="row">
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_7.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Denim 2 Quarter Pant</a>
                                            <p class="price">$40.00</p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_9.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 45%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Men's Denim combo set</a>
                                            <p class="price">$47.00 <del>$50.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>(17 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_10.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Women's Western Party Dress</a>
                                            <p class="price">$43.00</p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(22 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_11.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$75.00 <del>$69.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(58 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_17.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Denim Jeans Pants For Men</a>
                                            <p class="price">$71.00</p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_12.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Half Sleeve Tops for Women</a>
                                            <p class="price">$29.00</p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(44 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_13.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Sharee Petticoat For Women</a>
                                            <p class="price">$56.00 </p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(98 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_14.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 49%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Jeans Pants For Women</a>
                                            <p class="price">$49.00 <del>$39.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(44 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_16.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">cherry fabric western tops</a>
                                            <p class="price">$33.00</p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_15.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Denim Shirt For Men</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-pws-tab="tab222" data-pws-tab-name="tops">
                            <div class="row">
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_1.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_2.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 45%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Denim casual blazer for men</a>
                                            <p class="price">$120.00 <del>$99.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(17 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_3.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 15%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Women's Western Party Dress</a>
                                            <p class="price">$50.00 <del>$40.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(22 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_4.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$75.00 <del>$69.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(58 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_5.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 49%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$49.00 <del>$39.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(44 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_6.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 62%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Men's premium formal shirt</a>
                                            <p class="price">$4145.00 <del>$119.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(98 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_7.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 49%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$49.00 <del>$39.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(44 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_8.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_9.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_10.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-pws-tab="tab333" data-pws-tab-name="bags">
                            <div class="row">
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_11.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_12.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 45%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Denim casual blazer for men</a>
                                            <p class="price">$120.00 <del>$99.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(17 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_13.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 15%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Women's Western Party Dress</a>
                                            <p class="price">$50.00 <del>$40.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(22 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_14.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$75.00 <del>$69.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(58 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_15.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 49%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$49.00 <del>$39.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(44 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_16.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 62%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Men's premium formal shirt</a>
                                            <p class="price">$4145.00 <del>$119.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(98 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_17.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 49%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$49.00 <del>$39.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(44 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_18.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_19.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_20.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-pws-tab="tab444" data-pws-tab-name="shoes">
                            <div class="row">
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_21.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_22.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 45%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Denim casual blazer for men</a>
                                            <p class="price">$120.00 <del>$99.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(17 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_23.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 15%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Women's Western Party Dress</a>
                                            <p class="price">$50.00 <del>$40.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(22 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_24.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$75.00 <del>$69.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(58 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_25.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 49%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$49.00 <del>$39.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(44 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_26.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 62%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Men's premium formal shirt</a>
                                            <p class="price">$4145.00 <del>$119.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(98 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_27.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 49%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$49.00 <del>$39.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(44 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_28.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_29.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_30.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="new"> new</li>
                                                <li class="discount"> <b>-</b> 75%</li>
                                            </ul>
                                            <ul class="btn_list">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                            class="img-fluid">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product_text">
                                            <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                            <p class="price">$40.00 <del>$48.00</del></p>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>(20 reviews)</span>
                                            </p>
                                            <ul class="color">
                                                <li class="active" style="background:#DB4437"></li>
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        TRENDING PRODUCT 2 END
    ==============================-->


    <!--================================
        BEST SELLING PRODUCT 2 START
    ==================================-->
    <section class="best_selling_product_2 mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-9">
                    <div class="section_heading_2 section_heading">
                        <h3>Our <span>Best</span> Selling Products</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-3">
                    <div class="view_all_btn_area">
                        <a class="view_all_btn" href="shop.html">View all</a>
                    </div>
                </div>
            </div>
            <div class="row mt_15">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 col-md-4 wow fadeInUp">
                            <div class="best_selling_product_item">
                                <img src="{{asset('asset')}}/images/best_sell_pro_img_1.jpg" alt="best sell"
                                    class="img-fluid w-100">
                                <div class="text">
                                    <a class="title" href="shop_details.html">Men's trendy casual shoes</a>
                                    <p class="price">$89.00 <del>$12.00</del></p>
                                    <a class="buy_btn" href="shop_details.html">buy now <i
                                            class="far fa-arrow-up"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-md-4 wow fadeInUp">
                            <div class="best_selling_product_item">
                                <img src="{{asset('asset')}}/images/best_sell_pro_img_2.jpg" alt="best sell"
                                    class="img-fluid w-100">
                                <div class="text">
                                    <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                    <p class="price">$75.00 <del>$99.00</del></p>
                                    <a class="buy_btn" href="shop_details.html">buy now <i
                                            class="far fa-arrow-up"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-md-4 wow fadeInUp">
                            <div class="best_selling_product_item">
                                <img src="{{asset('asset')}}/images/best_sell_pro_img_3.jpg" alt="best sell"
                                    class="img-fluid w-100">
                                <div class="text">
                                    <a class="title" href="shop_details.html">Men's Casual Winter Jacket</a>
                                    <p class="price">$60.00 <del>$65.00</del></p>
                                    <a class="buy_btn" href="shop_details.html">buy now <i
                                            class="far fa-arrow-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight">
                    <div class="best_selling_product_item_large">
                        <img src="{{asset('asset')}}/images/best_sell_pro_img_4.jpg" alt="best sell" class="img-fluid w-100">
                        <div class="text">
                            <a class="title" href="shop_details.html">Best Sales Discount And Offers</a>
                            <p class="price">$89.00 <del>$12.00</del></p>
                            <a class="common_btn" href="shop_details.html">buy now <i
                                    class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        BEST SELLING PRODUCT 2 END
    ==================================-->


    <!--================================
        NEW ARRIVAL 2 START
    ==================================-->
    <section class="new_arrival_2 mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-9">
                    <div class="section_heading_2 section_heading">
                        <h3>Our <span>New</span> arrival Products</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-3">
                    <div class="view_all_btn_area">
                        <a class="view_all_btn" href="shop.html">View all</a>
                    </div>
                </div>
            </div>
            <div class="row mt_15">
                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_18.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="new"> new</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">Full Sleeve Hoodie Jacket</a>
                            <p class="price">$88.00 </p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(20 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#1C58F2"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_19.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="new"> new</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">Men's premium formal shirt</a>
                            <p class="price">$46.00</p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(17 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_20.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="new"> new</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">cherry fabric western tops</a>
                            <p class="price">$46.00</p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(22 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#1C58F2"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_4.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="new"> new</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html">Comfortable Sports Sneakers</a>
                            <p class="price">$75.00</p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(58 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1-5 col-6 col-md-4 col-xl-3 wow fadeInUp">
                    <div class="product_item_2 product_item">
                        <div class="product_img">
                            <img src="{{asset('asset')}}/images/product_23.png" alt="Product" class="img-fluid w-100">
                            <ul class="discount_list">
                                <li class="new"> new</li>
                            </ul>
                            <ul class="btn_list">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product_text">
                            <a class="title" href="shop_details.html"> Kid's dresses for summer</a>
                            <p class="price">$70.00</p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(44 reviews)</span>
                            </p>
                            <ul class="color">
                                <li class="active" style="background:#DB4437"></li>
                                <li style="background:#638C34"></li>
                                <li style="background:#1C58F2"></li>
                                <li style="background:#ffa500"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        NEW ARRIVAL 2 END
    ==================================-->


    <!--============================
        FAVOURITE PRODUCT 2 START
    ==============================-->
    <section class="favourite_product_2 mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 wow fadeInLeft">
                    <div class="bundle_product_banner">
                        <img src="{{asset('asset')}}/images/favourite_pro_2_banner_img.png" alt="bundle" class="img-fluid">
                        <div class="text">
                            <h4>This Spring On Apple <span>Up To 50K Off</span></h4>
                            <p>Limited Time Offer</p>
                            <a class="common_btn" href="shop_details.html">shop now <i class="fas fa-long-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="section_heading_2 section_heading">
                                <h3>Our <span>Favorite</span> Style Product</h3>
                            </div>
                        </div>
                        <div class="row mt_40 favourite_product_2_slider">
                            <div class="col-xl-3 wow fadeInUp">
                                <div class="product_item_2 product_item">
                                    <div class="product_img">
                                        <img src="{{asset('asset')}}/images/product_22.png" alt="Product" class="img-fluid w-100">
                                        <ul class="discount_list">
                                            <li class="new">new</li>
                                        </ul>
                                        <ul class="btn_list">
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product_text">
                                        <a class="title" href="shop_details.html">cherry fabric western tops</a>
                                        <p class="price">$54.00</p>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span>(98 reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 wow fadeInUp">
                                <div class="product_item_2 product_item">
                                    <div class="product_img">
                                        <img src="{{asset('asset')}}/images/product_24.png" alt="Product" class="img-fluid w-100">
                                        <ul class="btn_list">
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product_text">
                                        <a class="title" href="shop_details.html">Women denim jacket</a>
                                        <p class="price">$49.00</p>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span>(44 reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 wow fadeInUp">
                                <div class="product_item_2 product_item">
                                    <div class="product_img">
                                        <img src="{{asset('asset')}}/images/product_23.png" alt="Product" class="img-fluid w-100">
                                        <ul class="discount_list">
                                            <li class="discount"> <b>-</b> 20%</li>
                                        </ul>
                                        <ul class="btn_list">
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product_text">
                                        <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                        <p class="price">$40.00 <del>$48.00</del></p>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span>(20 reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 wow fadeInUp">
                                <div class="product_item_2 product_item">
                                    <div class="product_img">
                                        <img src="{{asset('asset')}}/images/product_25.png" alt="Product" class="img-fluid w-100">
                                        <ul class="btn_list">
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product_text">
                                        <a class="title" href="shop_details.html">Half Sleeve Jachket for Women</a>
                                        <p class="price">$60.00</p>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span>(57 reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 wow fadeInUp">
                                <div class="product_item_2 product_item">
                                    <div class="product_img">
                                        <img src="{{asset('asset')}}/images/product_26.png" alt="Product" class="img-fluid w-100">
                                        <ul class="discount_list">
                                            <li class="discount"> <b>-</b> 58%</li>
                                        </ul>
                                        <ul class="btn_list">
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/compare_icon_white.svg" alt="Compare"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/love_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('asset')}}/images/cart_icon_white.svg" alt="Love"
                                                        class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product_text">
                                        <a class="title" href="shop_details.html">Kid's Western Party Dress</a>
                                        <p class="price">$40.00 <del>$48.00</del></p>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span>(88 reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        FAVOURITE PRODUCT 2 END
    ==============================-->


    <!--=========================
        BRAND 2 START
    ==========================-->
    <section class="brand_2 mt_85">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-9">
                    <div class="section_heading_2 section_heading">
                        <h3>Our Top <span>Brands</span></h3>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-3">
                    <div class="view_all_btn_area">
                        <a class="view_all_btn" href="brand.html">View all</a>
                    </div>
                </div>
            </div>
            <div class="row mt_40">
                <div class="col-12">
                    <ul>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand1.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand2.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand3.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand3.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand4.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand5.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand6.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand7.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand8.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand9.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand10.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand1.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand2.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand3.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand4.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                        <li class="wow fadeInUp">
                            <a href="shop.html">
                                <img src="{{asset('asset')}}/images/brand5.png" alt="Brand" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BRAND 2 END
    ==========================-->


    <!--=========================
        BLOG 2 START
    ==========================-->
    <section class="blog_2 pt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-9">
                    <div class="section_heading_2 section_heading">
                        <h3>Our <span>News</span> & Articles</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-3">
                    <div class="view_all_btn_area">
                        <a class="view_all_btn" href="blog_classic.html">View all</a>
                    </div>
                </div>
            </div>
            <div class="row mt_15">
                <div class="col-lg-4 col-xxl-3 col-md-6 wow fadeInUp">
                    <div class="blog_item">
                        <a href="blog_details.html" class="blog_img">
                            <img src="{{asset('asset')}}/images/blog_img_1.png" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="blog_text">
                            <ul class="top">
                                <li>
                                    <span>
                                        <img src="{{asset('asset')}}/images/user_icon_black.svg" alt="user" class="img-fluid w-100">
                                    </span>
                                    Adnan Alvi
                                </li>
                                <li>
                                    <span>
                                        <img src="{{asset('asset')}}/images/calender.png" alt="Message" class="img-fluid w-100">
                                    </span>
                                    12 Mar 2025
                                </li>
                            </ul>
                            <a class="title" href="blog_details.html">How to Plop Hair for Bouncy, Beautiful Curls</a>
                            <ul class="bottom">
                                <li><a href="blog_details.html">read more <i class="fas fa-long-arrow-right"></i></a>
                                <li><span><i class="far fa-comment-dots"></i> 15 Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-md-6 wow fadeInUp">
                    <div class="blog_item">
                        <a href="blog_details.html" class="blog_img">
                            <img src="{{asset('asset')}}/images/blog_img_2.png" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="blog_text">
                            <ul class="top">
                                <li>
                                    <span>
                                        <img src="{{asset('asset')}}/images/user_icon_black.svg" alt="user" class="img-fluid w-100">
                                    </span>
                                    Hasib Sing
                                </li>
                                <li>
                                    <span>
                                        <img src="{{asset('asset')}}/images/calender.png" alt="Message" class="img-fluid w-100">
                                    </span>
                                    20 Apr 2025
                                </li>
                            </ul>
                            <a class="title" href="blog_details.html">Fast fashion: How clothes are linked to climate
                                change</a>
                            <ul class="bottom">
                                <li><a href="blog_details.html">read more <i class="fas fa-long-arrow-right"></i></a>
                                <li><span><i class="far fa-comment-dots"></i> 42 Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-md-6 wow fadeInUp">
                    <div class="blog_item">
                        <a href="blog_details.html" class="blog_img">
                            <img src="{{asset('asset')}}/images/blog_img_3.png" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="blog_text">
                            <ul class="top">
                                <li>
                                    <span>
                                        <img src="{{asset('asset')}}/images/user_icon_black.svg" alt="user" class="img-fluid w-100">
                                    </span>
                                    Smith Jhon
                                </li>
                                <li>
                                    <span>
                                        <img src="{{asset('asset')}}/images/calender.png" alt="Message" class="img-fluid w-100">
                                    </span>
                                    07 Mar 2025
                                </li>
                            </ul>
                            <a class="title" href="blog_details.html">Which foundation formula is right for your
                                skin?</a>
                            <ul class="bottom">
                                <li><a href="blog_details.html">read more <i class="fas fa-long-arrow-right"></i></a>
                                <li><span><i class="far fa-comment-dots"></i> 36 Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-md-6 wow fadeInUp">
                    <div class="blog_item">
                        <a href="blog_details.html" class="blog_img">
                            <img src="{{asset('asset')}}/images/blog_img_4.png" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="blog_text">
                            <ul class="top">
                                <li>
                                    <span>
                                        <img src="{{asset('asset')}}/images/user_icon_black.svg" alt="user" class="img-fluid w-100">
                                    </span>
                                    Jhon Deo
                                </li>
                                <li>
                                    <span>
                                        <img src="{{asset('asset')}}/images/calender.png" alt="Message" class="img-fluid w-100">
                                    </span>
                                    24 Apr 2025
                                </li>
                            </ul>
                            <a class="title" href="blog_details.html">How To Choose The Right Sofa for your home</a>
                            <ul class="bottom">
                                <li><a href="blog_details.html">read more <i class="fas fa-long-arrow-right"></i></a>
                                <li><span><i class="far fa-comment-dots"></i> 15 Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BLOG 2 END
    ==========================-->


    <!--========================
        SUBSCRIPTION 2 START
    ==========================-->
    <section class="subscription_2 mt_50 xs_mt_60" style="background: url({{asset('asset')}}/images/subscribe_2_bg.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-lg-8 wow fadeInUp">
                    <div class="subscription_2_text">
                        <h2>Get Upto <span>70% </span> Off Discount Coupon</h2>
                        <p>by Subscribe our Newsletter</p>
                        <form action="#">
                            <input type="text" placeholder="Your email">
                            <button type="submit" class="common_btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========================
        SUBSCRIPTION 2 END
    ==========================-->


@endsection
