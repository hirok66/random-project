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
                            <h1>My Account</h1>
                            <ul>
                                <li><a href="{{ route('welcome') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="{{ route('gest.dashboard') }}">Overview</a></li>
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
        DSHBOARD START
    =============================-->
    <section class="dashboard mb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeInUp">
                    <div class="dashboard_sidebar">
                        <div class="dashboard_sidebar_area">
                            <div class="dashboard_sidebar_user">
                                <form id="imageUploadForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="img">
                                        @if(Auth::guard('gest')->user()->image == null)
                                            <img id="preview_img" src="{{asset('asset/images/dashboard_user_img.jpg')}}" alt="dashboard"
                                                class="img-fluid w-100">
                                        @else
                                            <img id="preview_img" src="{{asset('images/grst/' . Auth::guard('gest')->user()->image)}}" alt="dashboard"
                                                class="img-fluid w-100">
                                        @endif

                                        <label for="profile_photo"><i class="far fa-camera"></i></label>
                                        <!-- name="image" id="profile_photo" -->
                                        <input type="file" id="profile_photo" name="image" hidden="">
                                    </div>
                                </form>
                                <h3>{{ Auth::guard('gest')->user()->first_name }}</h3>
                                <p>{{ Auth::guard('gest')->user()->email }}</p>
                            </div>
                            <div class="dashboard_sidebar_menu">
                                <ul>
                                    <li>
                                        <p>dashboard</p>
                                    </li>
                                    <li>
                                        <a class="active" href="{{ route('gest.dashboard') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                                                </svg>
                                            </span>
                                            overview
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.order.page') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                </svg>
                                            </span>
                                            Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.download') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m9 13.5 3 3m0 0 3-3m-3 3v-6m1.06-4.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                                </svg>
                                            </span>
                                            download
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.returns.request') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 9.75h4.875a2.625 2.625 0 0 1 0 5.25H12M8.25 9.75 10.5 7.5M8.25 9.75 10.5 12m9-7.243V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185Z" />
                                                </svg>
                                            </span>
                                            return policy
                                        </a>
                                    </li>
                                    <li>
                                        <p>Account settings</p>
                                    </li>
                                    <li>
                                        <a href="{{ route('profiel.information') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                </svg>
                                            </span>
                                            Personal Info
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.address') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                </svg>
                                            </span>
                                            address
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.wishlist') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                </svg>
                                            </span>
                                            Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.reviews') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                                </svg>
                                            </span>
                                            Reviews
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.change.password') }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                                </svg>
                                            </span>
                                            Change Password
                                        </a>
                                    </li>
                                    <li>




                                            <form method="POST" action="{{ route('gest.logout') }}" > @csrf





                                        <a href="{{ route('gest.logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                                </svg>
                                            </span>
                                            Logout
                                        </a>
                                          </form>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-9">
                       @yield('dashboard')
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer')

<script>
$(document).ready(function() {
    $('#profile_photo').change(function() {
        let formData = new FormData($('#imageUploadForm')[0]);

        $.ajax({
            url: "{{ route('dashboard.image') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response.success) {
                    // Image preview update kora
                    $('#preview_img').attr('src', response.image_url);
                  Swal.fire({
                            title: "Success!",
                            text: response.success,
                            icon: "success",
                            timer: 2000
                        });
                }
            },
            error: function(error) {
                console.log(error);
                alert("Upload failed!");
            }
        });
    });
});
</script>
@endsection

