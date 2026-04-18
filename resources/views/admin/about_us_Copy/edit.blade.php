@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1>Edit About Us</h1>
                    <a href="{{ route('about.us.index') }}" class="btn btn-primary btn-sm align-self-center">Back to List</a>
                </div>
                <div class="card-body">
                    <!-- Use the update route and include the ID -->
                   <form action="{{ route('update.about', $about->id) }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" value="{{ $about->title }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="desc" id="summernote">{{ $about->desc }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
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

    });
</script>
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
