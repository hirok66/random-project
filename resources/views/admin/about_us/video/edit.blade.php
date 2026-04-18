@extends('layouts.app')

@section('content')
  <div class="container mt-3">
 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                             <div class="card-header d-flex justify-content-between">


                    <a href="{{ route('about_us.video_index') }}" class="btn btn-primary btn-sm align-self-center">Back to List</a>
                </div>
                            <h1> Add New About_Us</h1>

                        </div>
                        <div class="card-body">



                            <form action="{{ route('video.update',$video->id) }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Youtube Link <span class="text-danger">*</span></label>
                                    <input type="text" name="link" class="form-control"  value="{{ $video->link }}">
                                    @error('link')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Video <span class="text-danger">*</span></label>
                                    <input type="file" name="video" class="form-control"
                                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"  value="{{ $video->video }}">

                                    @error('video')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <img id="blah" width="100" height="100" />
                                </div>

                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </form>


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
