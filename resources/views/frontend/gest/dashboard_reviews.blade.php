@extends('layouts.gest_deshboard')
@section('dashboard')
  <div class="dashboard_content mt_100">
                        <h3 class="dashboard_title">My Reviews</h3>
                        <div class="dashboard_reviews">
                            <div class="single_review_list_area">
                                <div class="single_review">
                                    <div class="img">
                                        <img src="{{asset('asset')}}/images/product_1.png" alt="Reviews" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <h5>
                                            <a class="title" href="shop_details.html">Denim 2 Quarter Pant</a>
                                            <span>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                            </span>
                                        </h5>
                                        <p class="date">05 January 2025</p>
                                        <p class="description">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit. Delectus
                                            exercitationem accusantium obcaecati quos voluptate
                                            nesciunt facilis itaque.</p>
                                    </div>
                                </div>
                                <div class="single_review">
                                    <div class="img">
                                        <img src="{{asset('asset')}}/images/product_2.png" alt="Reviews" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <h5>
                                            <a class="title" href="shop_details.html">Half Sleeve Tops for Women</a>
                                            <span>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="far fa-star" aria-hidden="true"></i>
                                            </span>
                                        </h5>
                                        <p class="date">03 April 2025</p>
                                        <p class="description">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit. Delectus
                                            exercitationem accusantium obcaecati quos voluptate.
                                        </p>
                                    </div>
                                </div>
                                <div class="single_review">
                                    <div class="img">
                                        <img src="{{asset('asset')}}/images/product_3.png" alt="Reviews" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <h5>
                                            <a class="title" href="shop_details.html">cherry fabric western tops</a>
                                            <span>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                            </span>
                                        </h5>
                                        <p class="date">10 March 2025</p>
                                        <p class="description">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit. Delectus
                                            exercitationem accusantium obcaecati quos voluptate
                                            nesciunt facilis itaque</p>
                                    </div>
                                </div>
                                <div class="single_review">
                                    <div class="img">
                                        <img src="{{asset('asset')}}/images/product_4.png" alt="Reviews" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <h5>
                                            <a class="title" href="shop_details.html">Men's premium formal shirt</a>
                                            <span>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                            </span>
                                        </h5>
                                        <p class="date">05 January 2025</p>
                                        <p class="description">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit. Delectus
                                            exercitationem accusantium obcaecati quos voluptate
                                            nesciunt facilis itaque.</p>
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
