@extends('layouts.master')
@section('content')

<!--=========================
    PAGE BANNER START
==========================-->
<section class="page_banner" style="background: url({{ asset('asset/images/page_banner_bg.jpg') }});">
    <div class="page_banner_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page_banner_text wow fadeInUp">
                        <h1>Return Policy </h1>
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <i class="fal fa-home-lg"></i> Home
                                </a>
                            </li>
                            <li>Return Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========================
    PAGE BANNER END
==========================-->


<!--=========================
    PRIVACY POLICY SECTION
==========================-->
<section class="about_us mt_100 mb_100">
    <div class="container">

        @forelse ($policys as $policy)
            <div class="row mb-4">
                <div class="col-lg-10 mx-auto">

                    <div class="card shadow-sm border-0 p-4">

                        <h2 class="mb-3 text-primary">
                            {{ $policy->title }}
                        </h2>

                        <div class="policy-content">
                            {!! $policy->des !!}
                        </div>

                    </div>

                </div>
            </div>
        @empty
            <div class="text-center">
                <h5>No Privacy Policy Found</h5>
            </div>
        @endforelse

    </div>
</section>

@endsection
