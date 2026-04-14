@extends('layouts.gest_deshboard')
@section('dashboard')

<div class="dashboard_content mt_100">
    <h3 class="dashboard_title">
        Add New Address
        <a class="common_btn cancel_edit" href="{{ route('dashboard.address') }}">cancel</a>
    </h3>


   @if(session('error'))
    <div class="alert alert-danger">
        <strong>{{ session('error') }}</strong>
    </div>
@endif

    <form method="POST" action="{{ route('address.store') }}">
        @csrf

        <div class="address_add_area dashboard_profile_info_edit">
            <div class="row">

                <!-- Name -->
                <div class="col-md-6">
                    <div class="single_input">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                         @error('name')

                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <div class="single_input">
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                         @error('email')

                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <div class="single_input">
                        <label>Phone<span class="text-danger">*</span></label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                         @error('phone')

                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                </div>

                <!-- Division -->
                <div class="col-md-6">
                    <div class="single_input">
                        <label>Division<span class="text-danger">*</span></label>
                        <select id="division" name="division_id" class="form-control">
                            <option value="">Select Division</option>
                        </select>
                    </div>
                    <div class="mb-3">
                         @error('division_id')

                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                </div>

                <!-- District -->
                <div class="col-md-6">
                    <div class="single_input">
                        <label>District<span class="text-danger">*</span></label>
                        <select id="district" name="district_id" class="form-control">
                            <option value="">Select District</option>
                        </select>
                    </div>
                    <div class="mb-3">
                         @error('district_id')

                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                </div>

                <!-- Upazila -->
                <div class="col-md-6">
                    <div class="single_input">
                        <label>Upazila<span class="text-danger">*</span></label>
                        <select id="upazila" name="upazila_id" class="form-control">
                            <option value="">Select Upazila</option>
                        </select>
                    </div>
                    <div class="mb-3">
                         @error('upazila_id')


                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                </div>

                <!-- Union -->
                <div class="col-md-6">
                    <div class="single_input">
                        <label>Union<span class="text-danger">*</span></label>
                        <select id="union" name="union_id" class="form-control">
                            <option value="">Select Union</option>
                        </select>
                    </div>
                    <div class="mb-3">
                         @error('union_id')

                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                </div>

                <!-- Village -->
                <div class="col-md-6">
                    <div class="single_input">
                        <label>Village<span class="text-danger">*</span></label>
                        <input type="text" name="village_name" class="form-control">
                    </div>
                    <div class="mb-3">
                         @error('village_name')

                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-12">
                    <div class="single_input">
                        <label>Address</label>
                        <textarea id="summernote" name="address" rows="4" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                         @error('address')

                    <strong class="text-danger">{{ $message }}</strong>

                    @enderror
                    </div>
                    <button type="submit" class="common_btn">
                        Save Address <i class="fas fa-long-arrow-right"></i>
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>

@endsection
@section('footer')

<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
<script>
    $(document).ready(function () {

    // Load Division
    $.get('/divisions', function(data){
        data.forEach(d => {
            $('#division').append(`<option value="${d.id}">${d.name}</option>`);
        });
    });

    // Division → District
    $('#division').on('change', function(){
        let id = $(this).val();
        $('#district').html('<option>Select District</option>');
        $('#upazila').html('<option>Select Upazila</option>');
        $('#union').html('<option>Select Union</option>');
        $('#village').html('<option>Select Village</option>');

        $.get('/districts/' + id, function(data){
            data.forEach(d => {
                $('#district').append(`<option value="${d.id}">${d.name}</option>`);
            });
        });
    });

    // District → Upazila
    $('#district').on('change', function(){
        let id = $(this).val();
        $('#upazila').html('<option>Select Upazila</option>');

        $.get('/upazilas/' + id, function(data){
            data.forEach(d => {
                $('#upazila').append(`<option value="${d.id}">${d.name}</option>`);
            });
        });
    });

    // Upazila → Union
    $('#upazila').on('change', function(){
        let id = $(this).val();
        $('#union').html('<option>Select Union</option>');

        $.get('/unions/' + id, function(data){
            data.forEach(d => {
                $('#union').append(`<option value="${d.id}">${d.name}</option>`);
            });
        });
    });

    // Union → Village
    $('#union').on('change', function(){
        let id = $(this).val();
        $('#village').html('<option>Select Village</option>');

       $.get('/unions/' + id, function(data){
            data.forEach(d => {
                $('#village').append(`<option value="${d.id}">${d.name}</option>`);
            });
        });
    });

});
</script>
@endsection
