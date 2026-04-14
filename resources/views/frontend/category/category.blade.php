@extends('layouts.master')
@section('content')

      <!--=========================
            PAGE BANNER START
        ==========================-->
        <section class="page_banner" style="background: url({{asset('asset')}}/images/page_banner_bg.jpg);">
            <div class="page_banner_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page_banner_text wow fadeInUp">
                                <h1>Category</h1>
                                <ul>
                                    <li><a href="{{ route('welcome') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                    <li><a href="{{ route('all.categoy') }}">Category</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========================
            PAGE BANNER START
        ==========================-->

     <!--============================
            CATEGORY PAGE START
        =============================-->
        <section class="category_page category_2 mt_75 mb_95">
            <div class="container">
                <div class="row">

                    @foreach ($categorys as $category)


                        <div class="col-xl-2 col-6 col-sm-4 col-md-3 wow fadeInUp">
                            <a href="{{ route('shop.page') }}" class="category_item">
                                <div class="img">
                                    <img src={{ asset('images/categories/' . $category->image) }} alt="Category" class="img-fluid w-100">
                                </div>
                                <h3> {{ $category->name }}</h3>
                            </a>
                        </div>

                    @endforeach

                </div>


                <div class="row">
                    <div class="pagination_area">
                   {{ $categorys->links('pagination.custom') }}
                    </div>
                </div>
            </div>
        </section>
        <!--============================
            CATEGORY PAGE END
        =============================-->
@endsection
i
