@extends('layouts.gest_deshboard')
@section('dashboard')

       <div class="dashboard_content mt_100">
                            <h3 class="dashboard_title">Change Password</h3>
                                   @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            <div class="dashboard_change_password dashboard_profile_info_edit">

                                <form class="info_edit_form" method="Post" action="{{ route('gest.password.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single_input">
                                                <label>Current Password</label>
                                                <input name="current_password" type="password" placeholder="**********">
                                                </div>
                                                 @error('current_password')
                                                <strong class="text-danger">{{ $message }}</strong>

                                                @enderror

                                        </div>
                                        <div class="col-md-6">
                                            <div class="single_input">
                                                <label>New Password</label>
                                                <input name="new_password" type="password" placeholder="**********">
                                                </div>
                                                @error('new_password')
                                                <strong class="text-danger">{{ $message }}</strong>

                                                @enderror

                                        </div>
                                        <div class="col-md-6">
                                            <div class="single_input">
                                                <label>Confirm Password</label>
                                                <input name="password_confirmation" type="password" placeholder="**********">

                                            </div>
                                              @error('password_confirmation')
                                                <strong class="text-danger">{{ $message }}</strong>

                                                @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="common_btn">Submit <i
                                                    class="fas fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

@endsection
