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
                            <h1>Brand</h1>
                            <ul>
                                <li><a href="#"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="#">Brand</a></li>
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
        BRAND PAGE START
    =============================-->
    <section class="brand_page mt_100 mb_100">
        <div class="container">
            <div class="row brand_2">
                <div class="col-12">
                    <ul>
                        @foreach ($brands as  $brand)


                        <li class="wow fadeInUp">
                          <a href="{{route('shop.page')}}">
                                  <img src="{{ asset('images/brand/' . $brand->image) }}" alt="Brand" class="img-fluid">
                                </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="pagination_area">
                         {{ $brands->links('pagination.custom') }}
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BRAND PAGE END
    =============================-->

@endsection
