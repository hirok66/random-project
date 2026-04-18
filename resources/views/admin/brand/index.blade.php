@extends('layouts.app')
@section('content')

       <div class="container mt-3">
        <div class="row ">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Brands list</h1>
                    </div>
                    <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Stasus</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($brands as $about)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- This replaces $key + 1 -->
                                    <td>{{ $about->name }}</td>

                                    <td><img src="{{ asset('images/brand/' . $about->image) }}" alt="about us" class="img-fluid w-100"></td>

                                    <td>
                                        <a href="{{ route('brand.status', $about->id) }}"
                                            class="btn btn-sm {{ $about->status == 'active' ? 'btn-success' : 'btn-danger' }}">

                                            {{ $about->status == 'active' ? 'Active' : 'Inactive' }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('brand.edit', $about->id) }}" class="btn btn-sm btn-success" >Edit</a>
                                        <a href="{{ route('brand.delete', $about->id) }}" class="btn btn-sm btn-danger" >Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    </div>

                     <div id="paginationLinks" class="d-flex justify-content-center mt-4">
                                    {{ $brands->links() }}
                                </div>
                </div>

            </div>

            <div class="col-lg-4">
                 <div class="card">
                    <div class="card-header">
                        <h1> Top Brands</h1>

                    </div>
                     <div class="card-body">



                      <form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                          <div class="mb-3">
                            <label for="name" class="form-label">Co Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="co_name" name="name">
                            @error('name')
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
