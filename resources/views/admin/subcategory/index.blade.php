@extends('layouts.app')
@section('content')
                {{-- style start --}}
                <style>
                    .google-search-box {
                        position: relative;
                        width: 100%;
                    }

                    .google-input {
                        padding-left: 40px;
                        /* icon space */
                        height: 45px;
                        border-radius: 25px;
                        border: 1px solid #ddd;
                        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
                        transition: all 0.3s;
                    }

                    .google-input:focus {
                        border-color: #4285f4;
                        box-shadow: 0 0 5px rgba(66, 133, 244, 0.5);
                    }

                    .search-icon {
                        position: absolute;
                        top: 50%;
                        left: 14px;
                        transform: translateY(-50%);
                        font-size: 16px;
                        color: #777;
                    }
                </style>

                {{-- style end --}}


                <div class="container mt-3">

                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3></h3>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</button>
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <div class="google-search-box">
                                    <i class="fas fa-search search-icon"></i>
                                    <input type="text" id="search" class="form-control google-input" placeholder="Search users...">
                                </div>
                            </div>
                            <div class="mb-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>category</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Order</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="userTableBody">
                                      @include('admin.subcategory.table')
                                    </tbody>
                                </table>

                                <div id="paginationLinks" class="d-flex justify-content-center mt-4">
                                    {{ $subcategorys->links() }}
                                </div>
                            </div>



                     <!------------------------  start Add User Modal ------------------->

            <!-- Add User Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="formData">
                                    @csrf
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Add User</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="mb-3">
                                            <label for="editStatus" class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="category_id" id="category_id" class="form-control form-select">
                                                <option value="active">Select Category</option>
                                                @foreach ($categories as $category )

                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name">
                                            @error('name')
                                                <div class="text-danger error_error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                         {{-- <div class="mb-3">
                                            <label for="editStatus" class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="order" id="order_id" class="form-control form-select">
                                                <option value="active">Select Category</option>
                                                @foreach ($subcategory as $category )

                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}




                                         <div class="mb-3">
                                            <label for="name" class="form-label">Image <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" id="image" name="image"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                            @error('image')
                                                <div class="text-danger error_error">{{ $message }}</div>
                                            @enderror
                                        </div>

                                         <div class="mb-3">
                               <img id="blah" alt="your image" width="100" height="100" />
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!------------------------  end Add User Modal ------------------->

                     <!------------------------  start Edit  User Modal ------------------->

            <!-- Add User Modal -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editformData">
                                    @csrf
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Add User</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">

                                            <input type="hidden" class="form-control" id="editUserId" name="id">

                                        </div>

                                         <div class="mb-3">
                                            <label for="editStatus" class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="category_id" id="category_id" class="form-control form-select">
                                                <option value="active">Select Category</option>
                                                @foreach ($categories as $category )

                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="editName" name="name">
                                            @error('name')
                                                <div class="text-danger error_error">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label for="editorder" class="form-label">Order <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="editorder" name="order">
                                        </div>

                                        <div class="mb-3">
                                            <label for="editStatus" class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="status" id="editStatus" class="form-control form-select">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>



                                         <div class="mb-3">
                                            <label for="name" class="form-label">Image <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" id="editImage" name="image" onchange="document.getElementById('editBlah').src = window.URL.createObjectURL(this.files[0])" >
                                            @error('image')
                                                <div class="text-danger error_error">{{ $message }}</div>
                                            @enderror
                                        </div>

                                         <div class="mb-3">
                               <img id="editBlah" src="" alt="your image" width="100" height="100" />
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!------------------------  end Edit  User Modal ------------------->





                        </div>
                    </div>
                </div>


            @endsection
            {{-- footer --}}

            @section('footer')

                <script>


            $(document).ready(function() {
                // 1. Initialize Summernote and UI
                $('#summernote').summernote();
                fetchsubcategory(); // Load data on page load

                // 2. Handle form submission
                $('#formData').submit(function(e) {
                    e.preventDefault();



                    $('.text-danger').text('');
                    var formData = new FormData(this);

                    $.ajax({
                        url: "{{ route('admin.subcategory.store') }}",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire({
                                title: "Success!",
                                text: response.message,
                                icon: "success",
                            });
                            $('#exampleModal').modal('hide');
                            $('#formData')[0].reset(); // Reset form
                            $('#summernote').summernote('reset'); // Reset editor
                            $('#blah').attr('src', ''); // Clear preview
                            fetchsubcategory(); // Refresh table
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                $.each(errors, function(key, value) {
                                   $('.'+key+"_error").text(value[0]);
                                });
                            }
                        }
                    });
                });

                // 3. Fetch data function (Keep inside or outside ready, but must be called)






                <!--------------------------------------------- 4. Handle status change (Example for category status toggle) ---------------------------->
$(document).ready(function () {

    // 🔄 INITIAL LOAD
    fetchsubcategory();

    let delayTimer;

    // 🔍 LIVE SEARCH (debounce)
    $(document).on('keyup', '#search', function () {

        clearTimeout(delayTimer);

        let query = $(this).val();

        delayTimer = setTimeout(function () {
            fetchsubcategory(query, 1);
        }, 300);

    });

    // 🔢 PAGINATION CLICK
    $(document).on('click', '#paginationLinks a', function (e) {
        e.preventDefault();

        let page = $(this).attr('href').split('page=')[1] || 1;
        let query = $('#search').val();

        fetchsubcategory(query, page);
    });

});


// 🔄 FETCH FUNCTION (UPDATED)




function fetchsubcategory(query = '', page = 1) {
        $.ajax({
            url: "{{ route('admin.subcategory.fetch') }}",
            type: "GET",
            data: {
                query: query,
                page: page
            },
            success: function(response) {
                $('#userTableBody').html(response.table);
                $('#paginationLinks').html(response.pagination);
            }
        });
    }

            <!--------------------------------------------- 4. Handle status change (Example for category status toggle) ---------------------------->

              $(document).on('click', '.change-status', function () {

    let id = $(this).data('id');
    let status = $(this).data('status');

    let newStatus = (status === 'active') ? 'inactive' : 'active';

    $.ajax({
        url: "{{ route('admin.subcategory.status') }}",
        type: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            id: id,
            status: newStatus
        },
        success: function (response) {
            Swal.fire("Success!", response.message, "success");
            fetchsubcategory();
        }
    });

});


            <!--------------------------------------------- 5. Handle edit change (Example for category status toggle) ---------------------------->
            $(document).on('click', '.edit-btn', function(e) {
                e.preventDefault();



                let id          = $(this).data('id');
                let name        = $(this).data('name');
                let category_id = $(this).data('category_id');
                let order       = $(this).data('order');
                let status      = $(this).data('status');
                let description = $(this).data('description');
                let image       = $(this).data('image'); // ডাটাবেসের ইমেজ নাম

                $('#editUserId').val(id);
                $('#editcategory_id').val(category_id);
                $('#editName').val(name);
                $('#editorder').val(order);
                $('#editSummernote').summernote('code', description);

                // ইমেজ প্রিভিউ সেট করা
                if (image && image !== "") {
                    // টেবিলের পাথের সাথে মিল রেখে এখানে পাথ দিন
                    let imageUrl = "{{ asset('images/subcategory') }}/" + image;
                    $('#editBlah').attr('src', imageUrl).show();
                } else {
                    // ইমেজ না থাকলে প্লেসহোল্ডার
                    $('#editBlah').attr('src', "{{ asset('no-image.png') }}").show();
                }

                $('#editModal').modal('show');
            });


            <!--------------------------------------------- 5. Handle update change (Example for category status toggle) ---------------------------->
           $(document).ready(function() {


            // এডিট ফর্ম সাবমিট হ্যান্ডেল করা
            $(document).on('submit', '#editformData', function(e) {
                e.preventDefault();

                // Summernote এর ভ্যালু সিঙ্ক করা
                if($('#editSummernote').length) {
                    $('#editSummernote').val($('#editSummernote').summernote('code'));
                }

                let id = $('#editUserId').val();
                let formData = new FormData(this);

                $.ajax({
                    url: "{{ url('admin/subcategory/update') }}/" + id,
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Updated!",
                            text: response.message,
                            icon: "success",
                            timer: 2000
                        });
                        $('#editModal').modal('hide');
                        fetchsubcategory(); // টেবিল রিফ্রেশ করবে
                    },
                    error: function(xhr) {
                        $('.error').remove();
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('[name="'+key+'"]').after('<div class="text-danger error">' + value[0] + '</div>');
                            });
                        } else {
                            Swal.fire("Error!", "Update failed", "error");
                        }
                    }
                });
            });
        });

// delete

          // ৬. ডাটা ডিলিট করা (SweetAlert2 + AJAX)
        $(document).on('click', '.delete-btn', function() {
            let id = $(this).data('id');

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // AJAX এর মাধ্যমে ডিলিট রিকোয়েস্ট
                    $.ajax({
                      url: "{{ url('admin/subcategory/delete') }}/" + id,
                        method: "DELETE",
                        success: function(response) {
                            // ডিলিট সফল হলে কনফার্মেশন মেসেজ
                            Swal.fire({
                                title: "Deleted!",
                                text: "The user has been deleted.",
                                icon: "success"
                            });
                            fetchsubcategory(); // টেবিল রিফ্রেশ
                        },
                        error: function(err) {
                            Swal.fire({
                                title: "Error!",
                                text: "Something went wrong.",
                                icon: "error"
                            });
                        }
                    });
                }
            });
        });

            }); // Only one closing bracket needed here




                </script>
@endsection
