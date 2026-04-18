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
                            <th>Name</th>
                            <th>Year</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Short Description</th>
                            <th>Short Description 2</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($aboutus as $about)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- This replaces $key + 1 -->
                                    <td>{{ $about->name }}</td>
                                    <td>{{ $about->year }}</td>
                                    <td>{{ $about->title }}</td>
                                    <td><img src="{{ asset('images/aboutUs/' . $about->image) }}" alt="about us" class="img-fluid w-100"></td>
                                    <td>{{ $about->short_des }}</td>
                                    <td>{{ $about->short_des2 }}</td>
                                    <td>
                                        <a href="{{ route('about.edit',$about->id) }}" class="btn btn-sm btn-success" >Edit</a>
                                        <a href="{{ route('about.delete',$about->id) }}" class="btn btn-sm btn-danger" >Delete</a>

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



                      <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                          <div class="mb-3">
                            <label for="name" class="form-label">Co Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="co_name" name="name">
                            @error('name')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                        </div>

                          <div class="mb-3">
                            <label for="name" class="form-label">Yers Experience <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="year" name="year">
                            @error('year')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                        </div>

                          <div class="mb-3">
                            <label for="name" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title">
                            @error('title')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                        </div>

                          <div class="mb-3">
                            <label for="name" class="form-label">Short Describtion <span class="text-danger">*</span></label>
                            <textarea name="short_des" id="summernote"></textarea>
                            @error('short_des')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                          <div class="mb-3">
                            <label for="name" class="form-label">Short Describtion 2 <span class="text-danger">*</span></label>
                            <textarea name="short_des2" id="summernote2"></textarea>
                            @error('short_des2')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror
                        </div>


                          <div class="mb-3">
                              <label for="name" class="form-label">Image <span class="text-danger">*</span></label>
                            <input type="file" name="image"  class="form-label"   onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                 @error('image')
                                <div class="text-danger error">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="mb-3">
                               <img id="blah" alt="your image" width="100" height="100" />
                                        </div>



                          <div class="mb-3">
                           <button type="submit"  class="btn btn-secondary" >Submit</button>
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
