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

                                <th>Title</th>
                                <th>Status</th>

                                <th>Description</th>

                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($about_us_text as $key=> $about)
                                    <tr>
                                        <td>{{$key+1 }}</td>
                                        <td>{{ $about->title }}</td>
                                        <td>{!!  $about->desc !!}</td>
                                        <td> <form action="{{ route('about.status', $about->id) }}" method="POST">
    @csrf
    <button class="btn btn-sm {{ $about->status == 'active' ? 'btn-success' : 'btn-danger' }}">
        {{ $about->status == 'active' ? 'Active' : 'Inactive' }}
    </button>
</form></td>
                                        <td>
                                            <a href="{{ route('edit.about', $about->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{ route('delete.about', $about->id) }}"
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
                        <form action="{{ route('amer.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title">
                                @error('title')
                                    <div class="text-danger error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Describtion <span class="text-danger">*</span></label>
                               <textarea name="desc" id="summernote"></textarea>
                                @error('desc')
                                    <div class="text-danger error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-secondary">Submit</button>
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
