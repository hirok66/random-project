@extends('layouts.app')
@section('content')


    @extends('layouts.app')
    @section('content')

        <div class="container mt-3">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h1>About list</h1>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                    <th>SL</th>

                                    <th>Link</th>
                                    <th>Image</th>

                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($AboutUSVideo as $about)
                                                                                <tr>
                                                                                    <td>{{ $loop->iteration }}</td> <!-- This replaces $key + 1 -->
                                        <td>{{ $about->link }}</td>
                                        <td> <video width="200" controls>
                                                <source src="{{ asset('storage/' . $about->video) }}" type="video/mp4">
                                                Your browser does not support video tag.
                                            </video></td>

                                                                                    <td>
                                                                                        <a href="{{ route('video.edit', $about->id) }}"
                                                                                            class="btn btn-sm btn-success">Edit</a>
                                                                                        <a href="{{ route('video.delete', $about->id) }}"
                                                                                            class="btn btn-sm btn-danger">Delete</a>

                                                                                    </td>
                                                                                </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h1> Add New About_Us</h1>

                        </div>
                        <div class="card-body">



                            <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Youtube Link <span class="text-danger">*</span></label>
                                    <input type="text" name="link" class="form-control">
                                    @error('link')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Video <span class="text-danger">*</span></label>
                                    <input type="file" name="video" class="form-control"
                                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

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



        </div>

    @endsection
    @section('footer')

        <script>
            $(document).ready(function () {
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



