@extends('layouts.gest_deshboard')
@section('dashboard')
 <div class="dashboard_content mt_100">
                        <h3 class="dashboard_title">Edit Information <a class="common_btn cancel_edit"
                                href="{{ route('profiel.information') }}">cancel</a></h3>
                        <div class="dashboard_profile_info_edit">
                            <form class="info_edit_form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <label>Name</label>
                                            <input type="text" placeholder="Jhon Deo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <label>email</label>
                                            <input type="email" placeholder="example@Zenis.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <label>Phone</label>
                                            <input type="text" placeholder="+964574621675658">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <label>Country</label>
                                            <select class="select_2">
                                                <option value="#">Singapore</option>
                                                <option value="#">Japan</option>
                                                <option value="#">Korea</option>
                                                <option value="#">Thailand</option>
                                                <option value="#">Kanada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <label>City</label>
                                            <select class="select_2">
                                                <option value="#">Tokyo</option>
                                                <option value="#">Japan</option>
                                                <option value="#">Korea</option>
                                                <option value="#">Thailand</option>
                                                <option value="#">Kanada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <label>state</label>
                                            <select class="select_2">
                                                <option value="#">Korea</option>
                                                <option value="#">Singapore</option>
                                                <option value="#">Japan</option>
                                                <option value="#">Thailand</option>
                                                <option value="#">Kanada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <label>Address</label>
                                            <textarea rows="6"
                                                placeholder="441, 4th street, Washington DC, USA"></textarea>
                                        </div>
                                        <button type="submit" class="common_btn">Update Profile <i
                                                class="fas fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
@endsection
