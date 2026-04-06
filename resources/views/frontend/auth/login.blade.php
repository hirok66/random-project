
@extends('layouts.master')
@section('content')


<section class="sign_in mt_100 mb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-lg-4 col-xl-4 d-none d-lg-block wow fadeInLeft">
                    <div class="sign_in_img">
                        <img src="{{asset('asset')}}/images/sign_in_img.jpg" alt="Sign In" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-7 col-xl-6 col-md-10 wow fadeInRight">
                    <div class="sign_in_form">
                        <h3>Sign In to Continue 👋</h3>
                        <form method="post" action="{{ route('gest.login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single_input">
                                        <label>email</label>
                                        <input type="email" name="email" placeholder="example@Zenis.com">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="single_input">
                                        <label>password</label>
                                        <input name="password" type="password" placeholder="********">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="forgot">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remeber Me
                                            </label>
                                        </div>
                                        <a href="forgot_password.html">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="common_btn">Sign In <i
                                            class="fas fa-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>

                        <p class="dont_account">Already have an account? <a href="{{ route('user.signup') }}">Sign Up</a></p>
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
@endsection
