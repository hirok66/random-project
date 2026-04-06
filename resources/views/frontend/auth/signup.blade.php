@extends('layouts.master')
@section('content')


     <!--=========================
            SIGN UP PAGE START
        ==========================-->
        <section class="sign_up mt_100 mb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-lg-4 col-xl-4 d-none d-lg-block wow fadeInLeft">
                        <div class="sign_in_img">
                            <img src="{{asset('asset')}}/images/sign_in_img_2.jpg" alt="Sign In" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-8 col-xl-6 col-md-10 wow fadeInRight">
                        <div class="sign_in_form">
                            <h3>Sign Up to Continue 👋</h3>
                            @section('success')
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endsection

                            <form method="post" action="{{ route('gest.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single_input">
                                            <label>first name</label>
                                            <input type="text" name="first_name" placeholder="First name">
                                            @error('first_name')
                                                <div class="alert text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_input">
                                            <label>Last name</label>
                                            <input type="text" name="last_name" placeholder="Last name">
                                            @error('last_name')
                                                <div class="alert text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <label>email</label>
                                            <input type="email" name="email" placeholder="example@Zenis.com">
                                            @error('email')
                                                <div class="alert text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <label>phone</label>
                                            <input type="text" name="phone" placeholder="+9574 123 4567">
                                            @error('phone')
                                                <div class="alert text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_input">
                                            <label>password</label>
                                            <input type="password" name="password" placeholder="********">
                                            @error('password')
                                                <div class="alert text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_input">
                                            <label>confirm password</label>
                                            <input type="password" name="password_confirmation" placeholder="********">
                                            @error('password_confirmation')
                                                <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="common_btn">Sign Up <i
                                                class="fas fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>

                            <p class="dont_account">Already have an account? <a href="{{ route('user.login') }}">Sign In</a></p>
                            <p class="or">or</p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span>
                                            <img src="{{asset('asset')}}/images/google_logo.png" alt="google" class="img-fluid w-100">
                                        </span>
                                        Google
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>
                                            <img src="{{asset('asset')}}/images/fb_logo.png" alt="google" class="img-fluid w-100">
                                        </span>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>
                                            <img src="{{asset('asset')}}/images/twitter_logo.png" alt="google" class="img-fluid w-100">
                                        </span>
                                        Twitter
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========================
            SIGN UP PAGE END
        ==========================-->
@endsection
