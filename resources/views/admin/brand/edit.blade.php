@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1>Edit Brand </h1>
                    <a href="{{ route('brand.index') }}" class="btn btn-primary btn-sm align-self-center">Back to List</a>
                </div>
                <div class="card-body">
                    <!-- Use the update route and include the ID -->
                   <form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ $brand->name }}">
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>




                        <div class="mb-3">
                            <label class="form-label">Image (Leave blank to keep current)</label>
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])" value="{{ asset('images/brand/' . $brand->image) }}">
                            @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Current/New Preview:</label><br>
                            <img id="preview" src="{{ asset('images/brand/' . $brand->image) }}" width="400" height="150" style="object-fit: cover;" />
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Update Brand Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('footer')
  @if (session('success'))
                    <script>
                        Swal.fire({
                            title: "Success!",
                            text: "{{ session('success') }}",
                            icon: "success",
                            timer: 3000,
                            showConfirmButton: false
                        });
                    </script>
                @endif
@endsection
