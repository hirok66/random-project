<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Zenis- Multipurpose eCommerce HTML Template</title>
    <link rel="icon" type="image/png" href="{{asset('asset')}}/images/favicon.png">
    <link rel="stylesheet" href="{{asset('asset')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/mobile_menu.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/scroll_button.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/venobox.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/jquery.pwstabs.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/range_slider.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/multiple-image-video.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/animated_barfiller.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/custom_spacing.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
</head>



<body class="default_home">

    <!--=========================
        HEADER START
    ==========================-->
    <header class="header_2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header_logo_area">
                        <a href="{{ route('welcome') }}" class="header_logo">
                            <img src="{{asset('asset')}}/images/logo_2.png" alt="Zenis" class="img-fluid w-100">
                        </a>
                        <div class="mobile_menu_icon d-block d-lg-none" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <span class="mobile_menu_icon"><i class="far fa-stream menu_icon_bar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-5 col-lg-5 d-none d-lg-block">
                    <form action="#">
                        <select class="select_2">
                                 <option>All Categories</option>
                 <?php
                      $categories = \App\Models\Category::where('status', 'active')->get();
                         foreach ($categories as $category) {
                         echo "<option>{$category->name}</option>";
                                                 }
                            ?>

                        </select>
                        <div class="input">
                            <input type="text" placeholder="Search your product...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-5 d-none d-lg-flex">
                    <div class="header_support_user d-flex flex-wrap">
                        <div class="header_support">
                            <span class="icon">
                                <i class="far fa-phone-alt"></i>
                            </span>
                            <h3>
                                Hotline:
                                <a href="callto:1234567890">
                                    <span>+(402) 763 282 46</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="topbar_right d-flex flex-wrap align-items-center justify-content-end">
                        <select class="select_js language">
                            <option>English</option>
                            <option>Arabic</option>
                            <option>Hindi</option>
                            <option>Chinese</option>
                        </select>
                        <select class="select_js">
                            <option>$USD</option>
                            <option>€EUR</option>
                            <option>¥JPY</option>
                            <option>£GBP</option>
                            <option>₹INR</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=========================
        HEADER END
    ==========================-->


    <!--=========================
        MENU 2 START
    ==========================-->
    <nav class="main_menu_2 main_menu d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap">
                    <div class="main_menu_area">
                        <div class="menu_category_area">
                            <a href="{{ route('welcome') }}" class="menu_logo d-none">
                                <img src="{{asset('asset')}}/images/logo_2.png" alt="Zenis" class="img-fluid w-100">
                            </a>
                            <div class="menu_category_bar">
                                <p>
                                    <span>
                                        <img src="{{asset('asset')}}/images/bar_icon_white.svg" alt="category icon">
                                    </span>
                                    Browse Categories
                                </p>
                                <i class="fas fa-chevron-down"></i>
                            </div>

                        </div>
                        <ul class="menu_item">
                            <li class="mega_menu_area">
                                <a class="active" href="{{ route('welcome') }}">home <i class="fas fa-chevron-down"></i></a>
                                <div class="mega_menu">

                                </div>
                            </li>
                            <li>
                                <a href="#">shop <i class="fas fa-chevron-down"></i></a>
                                <ul class="menu_droapdown">
                                    <li><a href="{{ route('shop.page') }}">Shop</a></li>
                                    <li><a href="shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Stores <i class="fas fa-chevron-down"></i></a>
                                <ul class="menu_droapdown">
                                    <li><a href="vendor.html">Store</a></li>
                                    <li><a href="vendor_details.html">Store Details</a></li>
                                    <li><a href="vendor_registration.html">Become a Vendor</a></li>
                                </ul>
                            </li>
                            <li><a href="flash_deals.html">Flash Deals</a></li>
                            <li><a href="#">pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="menu_droapdown">
                                    <li><a href="about_us.html">about us</a></li>
                                    <li><a href="category.html">Category</a></li>
                                    <li><a href="brand.html">Brand</a></li>
                                    <li><a href="cart.html">cart view</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="compare.html">compare</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="payment_success.html">payment success</a></li>
                                    <li><a href="payment_cancel.html">payment Cancel</a></li>
                                    <li><a href="track_order.html">track order</a></li>
                                    <li><a href="error.html">error/404</a></li>
                                    <li><a href="faq.html">FAQ's</a></li>
                                    <li><a href="privacy_policy.html">privacy Policy</a></li>
                                    <li><a href="terms_condition.html">terms and condition</a></li>
                                    <li><a href="return_policy.html">return policy</a></li>
                                    <li><a href="sign_in.html">sign in</a></li>
                                    <li><a href="sign_up.html">sign up</a></li>
                                    <li><a href="forgot_password.html">forgot password</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">blog <i class="fas fa-chevron-down"></i></a>
                                <ul class="menu_droapdown">
                                    <li><a href="blog_classic.html">blog classic</a></li>
                                    <li><a href="blog_right_sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog_left_sidebar.html">blog left sidebar</a></li>
                                    <li><a href="blog_details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact_us.html">contact</a></li>
                        </ul>
                        <ul class="menu_icon">
                            <li>
                                <a href="compare.html">
                                    <b>
                                        <img src="{{asset('asset')}}/images/compare_black.svg" alt="Wishlist" class="img-fluid">
                                    </b>
                                    <span>2</span>
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <b>
                                        <img src="{{asset('asset')}}/images/love_black.svg" alt="Wishlist" class="img-fluid">
                                    </b>
                                    <span>5</span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight">
                                    <b>
                                        <img src="{{asset('asset')}}/images/cart_black.svg" alt="cart" class="img-fluid">
                                    </b>
                                    <span>3</span>
                                </a>
                            </li>
                            <li>
                        @if(Auth::guard('gest')->check())
                            <!-- Show this when logged in -->
                            <a class="user" href="{{ route('welcome') }}">
                                <b>
                                    @php
                                  $user = Auth::guard('gest')->user();
                                    @endphp

                                    @if($user->image)

                                             <img src="{{ asset('images/grst/'.$user->image) }}" alt="signup" class="img-fluid" class="users_image w-100">
                                    @else
                                        {{-- সরাসরি Avatar ক্লাস ব্যবহার করুন --}}
                                        <img src="{{asset('asset')}}/images/user_icon_black.svg" alt="signup" class="img-fluid">
                                    @endif

                                </b>
                                <h5>{{ Auth::guard('gest')->user()->first_name }}</h5>
                            </a>
                        @else
                            <!-- Show this when NOT logged in -->
                            <a class="user" href="{{ url('/user/login') }}">
                                <b>
                                    <!-- Use a generic icon or a "plus" icon for Sign Up -->
                                    <img src="{{asset('asset')}}/images/user_icon_black.svg" alt="signup" class="img-fluid">
                                </b>
                                <h5>Sign Up</h5>
                            </a>
                        @endif

                                @if (Auth::guard('gest')->check())
                                   <ul class="user_dropdown">
                                    <li>
                                        <a href="{{ route('gest.dashboard') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
                                            </svg>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('gest.dashboard') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>
                                            my account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.order.page') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                            </svg>
                                            my order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.wishlist') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                            wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('gest.logout') }}" > @csrf
                                        <a href="{{ route('gest.logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                            </svg>
                                            logout
                                        </a>
                                           </form>
                                    </li>
                                </ul>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="mini_cart">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel"> my cart <span>(05)</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                        class="far fa-times"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                    <li>
                        <a href="shop_details.html" class="cart_img">
                            <img src="{{asset('asset')}}/images/product_1.png" alt="product" class="img-fluid w-100">
                        </a>
                        <div class="cart_text">
                            <a class="cart_title" href="shop_details.html">Men's Fashionable Hoodie</a>
                            <p>$140 <del>$150</del></p>
                            <span><b>Color:</b> Red</span>
                            <span><b>Size:</b> XL (Extra Large)</span>
                        </div>
                        <a class="del_icon" href="#"><i class="fal fa-times"></i></a>
                    </li>
                    <li>
                        <a href="#shop_details.html" class="cart_img">
                            <img src="{{asset('asset')}}/images/product_2.png" alt="product" class="img-fluid w-100">
                        </a>
                        <div class="cart_text">
                            <a class="cart_title" href="shop_details.html">Kids cotton Combo Set</a>
                            <p>$130 <del>$160</del></p>
                            <span><b>Color:</b> Orange</span>
                            <span><b>Size:</b> M (Medium)</span>
                        </div>
                        <a class="del_icon" href="#"><i class="fal fa-times"></i></a>
                    </li>
                    <li>
                        <a href="shop_details.html" class="cart_img">
                            <img src="{{asset('asset')}}/images/product_3.png" alt="product" class="img-fluid w-100">
                        </a>
                        <div class="cart_text">
                            <a class="cart_title" href="shop_details.html">Women's Western Party Dress</a>
                            <p>$90 <del>$100</del></p>
                            <span><b>Color:</b> Purple</span>
                            <span><b>Size:</b> S (Small)</span>
                        </div>
                        <a class="del_icon" href="#"><i class="fal fa-times"></i></a>
                    </li>
                    <li>
                        <a href="shop_details.html" class="cart_img">
                            <img src="{{asset('asset')}}/images/product_4.png" alt="product" class="img-fluid w-100">
                        </a>
                        <div class="cart_text">
                            <a class="cart_title" href="shop_details.html">Men's trendy formal shoes</a>
                            <p>$140</p>
                            <span><b>Color:</b> Blue</span>
                            <span><b>Size:</b> XL (Extra Large)</span>
                        </div>
                        <a class="del_icon" href="#"><i class="fal fa-times"></i></a>
                    </li>
                    <li>
                        <a href="shop_details.html" class="cart_img">
                            <img src="{{asset('asset')}}/images/product_5.png" alt="product" class="img-fluid w-100">
                        </a>
                        <div class="cart_text">
                            <a class="cart_title" href="shop_details.html">Kid's Western Party Dress</a>
                            <p>$99.00</p>
                            <span><b>Color:</b> Black</span>
                            <span><b>Size:</b> L (Large)</span>
                        </div>
                        <a class="del_icon" href="#"><i class="fal fa-times"></i></a>
                    </li>
                </ul>
                <h5>sub total <span>$429.00</span></h5>
                <div class="minicart_btn_area">
                    <a class="common_btn" href="cart.html">view cart</a>
                </div>
            </div>
        </div>
    </div>
    <!--=========================
        MENU 2 END
    ==========================-->


    <!--============================
        MOBILE MENU START
    ==============================-->
    <div class="mobile_menu_area">
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fal fa-times"></i></button>
            <div class="offcanvas-body">

                <ul class="mobile_currency">
                    <li>
                        <select class="select_js language">
                            <option>English</option>
                            <option>Arabic</option>
                            <option>Hindi</option>
                            <option>Chinese</option>
                        </select>
                    </li>
                    <li>
                        <select class="select_js">
                            <option>$USD</option>
                            <option>€EUR</option>
                            <option>¥JPY</option>
                            <option>£GBP</option>
                            <option>₹INR</option>
                        </select>
                    </li>
                </ul>

                <ul class="mobile_menu_header d-flex flex-wrap">
                    <li>
                        <a href="compare.html">
                            <b> <img src="{{asset('asset')}}/images/compare_black.svg" alt="Wishlist" class="img-fluid"> </b>
                            <span>2</span>
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.html">
                            <b> <img src="{{asset('asset')}}/images/love_black.svg" alt="Wishlist" class="img-fluid"></b>
                            <span>4</span>
                        </a>
                    </li>
                    <li>
                        <a href="cart.html">
                            <b><img src="{{asset('asset')}}/images/cart_black.svg" alt="cart" class="img-fluid"></b>
                            <span>5</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.html">
                            <b><img src="{{asset('asset')}}/images/user_icon_black.svg" alt="cart" class="img-fluid"></b>
                        </a>
                    </li>
                </ul>

                <form class="mobile_menu_search">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="far fa-search"></i></button>
                </form>

                <div class="mobile_menu_item_area">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Categories</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">menu</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <ul class="main_mobile_menu">
                                <li class="mobile_dropdown">
                                    <a href="#">Men's Fashion</a>
                                    <ul class="inner_menu">
                                        <li><a href="{{ route('shop.page') }}">jeans pant</a></li>
                                        <li><a href="{{ route('shop.page') }}">formal shirt</a></li>
                                        <li><a href="{{ route('shop.page') }}">2 quater</a></li>
                                        <li><a href="{{ route('shop.page') }}">denim jacket</a></li>
                                        <li><a href="{{ route('shop.page') }}">t-shirt</a></li>
                                        <li><a href="{{ route('shop.page') }}">polo-shirt</a></li>
                                        <li><a href="{{ route('shop.page') }}">formal pant</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">women's Fashion</a>
                                    <ul class="inner_menu">
                                        <li><a href="{{ route('shop.page') }}">sharee</a></li>
                                        <li><a href="{{ route('shop.page') }}">kurti</a></li>
                                        <li><a href="{{ route('shop.page') }}">plazoo</a></li>
                                        <li><a href="{{ route('shop.page') }}">lagins</a></li>
                                        <li><a href="{{ route('shop.page') }}">tops</a></li>
                                        <li><a href="{{ route('shop.page') }}">scart</a></li>
                                        <li><a href="{{ route('shop.page') }}">denim jeans</a></li>
                                        <li><a href="{{ route('shop.page') }}">Gown</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">kids fashion</a>
                                    <ul class="inner_menu">
                                        <li><a href="{{ route('shop.page') }}">t-shirt</a></li>
                                        <li><a href="{{ route('shop.page') }}">partu dress</a></li>
                                        <li><a href="{{ route('shop.page') }}">sharee</a></li>
                                        <li><a href="{{ route('shop.page') }}">kurti</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">western wear</a>
                                    <ul class="inner_menu">
                                        <li><a href="{{ route('shop.page') }}">western party dress</a></li>
                                        <li><a href="{{ route('shop.page') }}">kurti</a></li>
                                        <li><a href="{{ route('shop.page') }}">denim pant</a></li>
                                        <li><a href="{{ route('shop.page') }}">casual jacket</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Denim collection</a>
                                    <ul class="inner_menu">
                                        <li><a href="{{ route('shop.page') }}">shirt</a></li>
                                        <li><a href="{{ route('shop.page') }}">pant</a></li>
                                        <li><a href="{{ route('shop.page') }}">jacket</a></li>
                                        <li><a href="{{ route('shop.page') }}">blazer</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">sport wear</a>
                                    <ul class="inner_menu">
                                        <li><a href="{{ route('shop.page') }}">shoes</a></li>
                                        <li><a href="{{ route('shop.page') }}">trouser</a></li>
                                        <li><a href="{{ route('shop.page') }}">meat</a></li>
                                        <li><a href="{{ route('shop.page') }}">Outdoors</a></li>
                                        <li><a href="{{ route('shop.page') }}">Sports Pant</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">beauty products</a>
                                    <ul class="inner_menu">
                                        <li><a href="{{ route('shop.page') }}">Concealer Palette</a></li>
                                        <li><a href="{{ route('shop.page') }}">Highlighter Palette</a></li>
                                        <li><a href="{{ route('shop.page') }}">SkinPure Avocado Gel</a></li>
                                        <li><a href="{{ route('shop.page') }}">Blush Palette</a></li>
                                        <li><a href="{{ route('shop.page') }}">Face Wash</a></li>
                                        <li><a href="{{ route('shop.page') }}">Lip Balm</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">fashion jewellery</a>
                                    <ul class="inner_menu">
                                        <li><a href="{{ route('shop.page') }}">Necklace</a></li>
                                        <li><a href="{{ route('shop.page') }}">ear ring</a></li>
                                        <li><a href="{{ route('shop.page') }}">fingure ring</a></li>
                                        <li><a href="{{ route('shop.page') }}">bratchlet</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <ul class="main_mobile_menu">
                                <li class="mobile_dropdown">
                                    <a href="#">home</a>
                                    <ul class="inner_menu">
                                        <li><a href="index.html">clothing fashion 01</a></li>
                                        <li><a href="home_fashion_2.html">clothing fashion 02</a></li>
                                        <li><a href="home_grocery.html">Grocery Store</a></li>
                                        <li><a href="home_beauty.html">Beauty & Cosmetics</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">shop</a>
                                    <ul class="inner_menu">
                                        <li><a href="#">store</a></li>
                                        <li><a href="#">store details</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">store</a>
                                    <ul class="inner_menu">
                                        <li><a href="vendor.html">store</a></li>
                                        <li><a href="vendor_details.html">store details</a></li>
                                        <li><a href="vendor_registration.html">become a vendor</a></li>
                                    </ul>
                                </li>
                                <li><a href="flash_deals.html">flash deals</a></li>
                                <li class="mobile_dropdown">
                                    <a href="#">pages</a>
                                    <ul class="inner_menu">
                                        <li><a href="about_us.html">about us</a></li>
                                        <li><a href="category.html">Category</a></li>
                                        <li><a href="brand.html">Brand</a></li>
                                        <li><a href="cart.html">cart view</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="payment_success.html">payment success</a></li>
                                        <li><a href="payment_cancel.html">payment Cancel</a></li>
                                        <li><a href="track_order.html">track order</a></li>
                                        <li><a href="error.html">error/404</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="privacy_policy.html">privacy Policy</a></li>
                                        <li><a href="terms_condition.html">terms and condition</a></li>
                                        <li><a href="return_policy.html">return policy</a></li>
                                        <li><a href="sign_in.html">sign in</a></li>
                                        <li><a href="sign_up.html">sign up</a></li>
                                        <li><a href="forgot_password.html">forgot password</a></li>
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">blog</a>
                                    <ul class="inner_menu">
                                        <li><a href="blog_classic.html">blog classic</a></li>
                                        <li><a href="blog_left_sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog_left_sidebar.html">blog left sidebar</a></li>
                                        <li><a href="blog_details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact_us.html">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================
        MOBILE MENU END
    ==============================-->

@yield('content')
    <!--=========================
        FOOTER 2 START
    ==========================-->
    <footer class="footer_2 pt_100" style="background: url({{asset('asset')}}/images/footer_2_bg_2.jpg);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".7s">
                    <div class="footer_2_logo_area">
                        <a class="footer_logo" href="{{ route('welcome') }}">
                            <img src="{{asset('asset')}}/images/footer_logo_2.png" alt="Zenis" class="img-fluid w-100">
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, distinctio molestiae error
                            ullam obcaecati dolorem inventore.</p>
                        <ul>
                            <li><span>Follow :</span></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay="1s">
                    <div class="footer_link">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="footer_link">
                        <h3>Category</h3>
                        <ul>
                            <li><a href="#">Men’s Fashion</a></li>
                            <li><a href="#">denim Collection</a></li>
                            <li><a href="#">western wear</a></li>
                            <li><a href="#">sport wear</a></li>
                            <li><a href="#">fashion jewellery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay="1.6s">
                    <div class="footer_link">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Privacy Ploicy</a></li>
                            <li><a href="#">Terms and Condition</a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Become a Vendor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="1.9s">
                    <div class="footer_link footer_logo_area">
                        <h3>Contact Us</h3>
                        <p>It is a long established fact that reader distracted looking layout It is a long established
                            fact.</p>
                        <span>
                            <b><img src="{{asset('asset')}}/images/location_icon_white.png" alt="Map" class="img-fluid"></b>
                            37 W 24th St, New York, NY</span>
                        <span>
                            <b><img src="{{asset('asset')}}/images/phone_icon_white.png" alt="Call" class="img-fluid"></b>
                            <a href="callto:+123324587939">+123 324 5879 39</a>
                        </span>
                        <span>
                            <b><img src="{{asset('asset')}}/images/mail_icon_white.png" alt="Mail" class="img-fluid"></b>
                            <a href="mailto:support@mail.com">info@Zenis.com</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer_copyright mt_75">
                        <p>Copyright @ <b>Zenis</b> 2025. All right reserved.</p>
                        <ul class="payment">
                            <li>Payment by :</li>
                            <li>
                                <img src="{{asset('asset')}}/images/footer_payment_icon_1.jpg" alt="payment"
                                    class="img-fluid w-100">
                            </li>
                            <li>
                                <img src="{{asset('asset')}}/images/footer_payment_icon_2.jpg" alt="payment"
                                    class="img-fluid w-100">
                            </li>
                            <li>
                                <img src="{{asset('asset')}}/images/footer_payment_icon_3.jpg" alt="payment"
                                    class="img-fluid w-100">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=========================
        FOOTER 2 END
    ==========================-->


    <!--==========================
        SCROLL BUTTON START
    ===========================-->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--==========================
        SCROLL BUTTON END
    ===========================-->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- summer note --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });
</script>
    <!--jquery library js-->
    <script src="{{asset('asset')}}/js/jquery-3.7.1.min.js"></script>
    <!--bootstrap js-->
    <script src="{{asset('asset')}}/js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="{{asset('asset')}}/js/Font-Awesome.js"></script>
    <!--counter js-->
    <script src="{{asset('asset')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('asset')}}/js/jquery.countup.min.js"></script>
    <!--nice select js-->
    <script src="{{asset('asset')}}/js/jquery.nice-select.min.js"></script>
    <!--select 2 js-->
    <script src="{{asset('asset')}}/js/select2.min.js"></script>
    <!--simply countdown js-->
    <script src="{{asset('asset')}}/js/simplyCountdown.js"></script>
    <!--slick slider js-->
    <script src="{{asset('asset')}}/js/slick.min.js"></script>
    <!--venobox js-->
    <script src="{{asset('asset')}}/js/venobox.min.js"></script>
    <!--wow js-->
    <script src="{{asset('asset')}}/js/wow.min.js"></script>
    <!--marquee js-->
    <script src="{{asset('asset')}}/js/jquery.marquee.min.js"></script>
    <!--pws tabs js-->
    <script src="{{asset('asset')}}/js/jquery.pwstabs.min.js"></script>
    <!--scroll button js-->
    <script src="{{asset('asset')}}/js/scroll_button.js"></script>
    <!--youtube background js-->
    <script src="{{asset('asset')}}/js/jquery.youtube-background.min.js"></script>
    <!--range slider js-->
    <script src="{{asset('asset')}}/js/range_slider.js"></script>
    <!--sticky sidebar js-->
    <script src="{{asset('asset')}}/js/sticky_sidebar.js"></script>
    <!--multiple image upload js-->
    <script src="{{asset('asset')}}/js/multiple-image-video.js"></script>
    <!--animated barfiller js-->
    <script src="{{asset('asset')}}/js/animated_barfiller.js"></script>
    <!--main/custom js-->
    <script src="{{asset('asset')}}/js/custom.js"></script>
 @yield('footer')

</body>


<!-- Mirrored from html.narzotech.com/zenis/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2026 10:19:34 GMT -->
</html>
