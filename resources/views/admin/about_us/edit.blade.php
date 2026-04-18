@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1>Edit About Us</h1>
                    <a href="{{ route('about.us.make') }}" class="btn btn-primary btn-sm align-self-center">Back to List</a>
                </div>
                <div class="card-body">
                    <!-- Use the update route and include the ID -->
                    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-3">
                            <label class="form-label">Co Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ $about->name }}">
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Years Experience <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="year" value="{{ $about->year }}">
                            @error('year') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $about->title }}">
                            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Short Description <span class="text-danger">*</span></label>
                            <textarea name="short_des" id="summernote">{{ $about->short_des }}</textarea>
                            @error('short_des') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Short Description 2 <span class="text-danger">*</span></label>
                            <textarea name="short_des2" id="summernote2">{{ $about->short_des2 }}</textarea>
                            @error('short_des2') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image (Leave blank to keep current)</label>
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
                            @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Current/New Preview:</label><br>
                            <img id="preview" src="{{ asset('images/aboutUs/' . $about->image) }}" width="150" height="150" style="object-fit: cover;" />
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Update About Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('footer')
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
        $('#summernote2').summernote();
    });
</script>
@endsection
