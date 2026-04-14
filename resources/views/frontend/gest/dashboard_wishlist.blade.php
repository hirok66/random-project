@extends('layouts.gest_deshboard')
@section('dashboard')

 <div class="dashboard_content mt_100">
                        <h3 class="dashboard_title">My Wishlist</h3>
                        <div class="dashboard_wishlist">
                            <div class="row">
                                <div class="col-xl-4 col-6 col-md-4 col-lg-6 wow fadeInUp">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_1.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 75%</li>
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
                                            <a class="title" href="{{ route('shop.details') }}">Full Sleeve Hoodie Jacket</a>
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
                                <div class="col-xl-4 col-6 col-md-4 col-lg-6 wow fadeInUp">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_24.png" alt="Product"
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
                                            <a class="title" href="{{ route('shop.details') }}">Denim casual blazer for men</a>
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
                                <div class="col-xl-4 col-6 col-md-4 col-lg-6 wow fadeInUp">
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
                                            <a class="title" href="{{ route('shop.details') }}">Women's Western Party Dress</a>
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
                                                <li style="background:#638C34"></li>
                                                <li style="background:#1C58F2"></li>
                                                <li style="background:#ffa500"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-6 col-md-4 col-lg-6 wow fadeInUp">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_26.png" alt="Product"
                                                class="img-fluid w-100">
                                            <ul class="discount_list">
                                                <li class="discount"> <b>-</b> 75%</li>
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
                                            <a class="title" href="{{ route('shop.details') }}">tops pant beautiful dress</a>
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
                                <div class="col-xl-4 col-6 col-md-4 col-lg-6 wow fadeInUp">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_8.png" alt="Product"
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
                                            <a class="title" href="{{ route('shop.details') }}">Kid's Western Party Dress</a>
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
                                <div class="col-xl-4 col-6 col-md-4 col-lg-6 wow fadeInUp">
                                    <div class="product_item_2 product_item">
                                        <div class="product_img">
                                            <img src="{{asset('asset')}}/images/product_19.png" alt="Product"
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
                                            <a class="title" href="{{ route('shop.details') }}">Men's premium formal shirt</a>
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
                            <div class="row">
                                <div class="pagination_area">
                                      {{ $categorys->links('pagination.custom') }}
                                </div>
                            </div>
                        </div>

                    </div>

@endsection
