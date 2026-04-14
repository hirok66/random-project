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
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Product Id</th>
                                            <th>Order</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="userTableBody">
                                        @include('admin.category.table')
                                    </tbody>
                                </table>

                                <div id="paginationLinks" class="d-flex justify-content-center mt-4">
                                    {{ $categories->links() }}
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
                                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name">
                                            @error('name')
                                                <div class="text-danger error">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea id="summernote" name="description"></textarea>
                                            @error('description')
                                                <div class="text-danger error">{{ $message }}</div>
                                            @enderror
                                        </div>


                                         <div class="mb-3">
                                            <label for="name" class="form-label">Image <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" id="image" name="image"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                            @error('image')
                                                <div class="text-danger error">{{ $message }}</div>
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
                                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="editName" name="name">
                                            @error('name')
                                                <div class="text-danger error">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea id="editSummernote" name="description"></textarea>
                                            @error('description')
                                                <div class="text-danger error">{{ $message }}</div>
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
                                                <div class="text-danger error">{{ $message }}</div>
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
  $('#summernote').summernote();
});
            </script>

                <script>



            $(document).ready(function() {
                // 1. Initialize Summernote and UI
                $('#summernote').summernote();
                fetchCategories(); // Load data on page load

                // 2. Handle form submission
                $('#formData').submit(function(e) {
                    e.preventDefault();

                    // Sync Summernote content to textarea
                    if($('#summernote').length) {
                        $('#summernote').val($('#summernote').summernote('code'));
                    }

                    $('.error').remove();
                    var formData = new FormData(this);

                    $.ajax({
                        url: "{{ url('admin/categories/store') }}",
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
                            fetchCategories(); // Refresh table
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                $.each(errors, function(key, value) {
                                    $('[name="'+key+'"]').after('<div class="text-danger error">' + value[0] + '</div>');
                                });
                            }
                        }
                    });
                });

                // 3. Fetch data function (Keep inside or outside ready, but must be called)






                <!--------------------------------------------- 4. Handle status change (Example for subcategory status toggle) ---------------------------->
    $('#summernote').summernote();
    fetchCategories();

    // 🔍 SEARCH
    let delayTimer;

    $('#search').on('keyup', function() {

        clearTimeout(delayTimer);

        let query = $(this).val();

        delayTimer = setTimeout(function() {
            fetchCategories(query, 1);
        }, 300);

    });

    // 🔢 PAGINATION
    $(document).on('click', '#paginationLinks a', function(e) {
        e.preventDefault();

        let page = $(this).attr('href').split('page=')[1];
        let query = $('#search').val();

        fetchCategories(query, page);
    });

    // 🔄 FETCH DATA
    function fetchCategories(query = '', page = 1) {
        $.ajax({
            url: "{{ url('admin/categories/fetch') }}",
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

            <!--------------------------------------------- 4. Handle status change (Example for subcategory status toggle) ---------------------------->

               $(document).on('click', '.change-status', function(e) {
                e.preventDefault(); // পেজ রিফ্রেশ হওয়া বন্ধ করবে

                var id = $(this).data('id');
                var currentStatus = $(this).data('status');
                var newStatus = (currentStatus === 'active' || currentStatus == 1) ? 'inactive' : 'active';

                $.ajax({
                    url: "{{ url('admin/categories/status') }}/" + id,
                    type: "POST",
                    data: {
                        data: { id: id, status: newStatus },
                        _token: "{{ csrf_token() }}",
                        status: newStatus
                    },
                    success: function(response) {
                        Swal.fire({
                            title: "Success!",
                            text: response.message,
                            icon: "success",
                            timer: 2000
                        });
                        fetchCategories(); // টেবিল রিফ্রেশ করবে
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        Swal.fire("Error!", "Something went wrong", "error");
                    }
                });
            });



            <!--------------------------------------------- 5. Handle edit change (Example for subcategory status toggle) ---------------------------->
            $(document).on('click', '.edit-btn', function(e) {
                e.preventDefault();



                let id          = $(this).data('id');
                let name        = $(this).data('name');
                let order       = $(this).data('order');
                let status      = $(this).data('status');
                let description = $(this).data('description');
                let image       = $(this).data('image'); // ডাটাবেসের ইমেজ নাম

                $('#editUserId').val(id);
                $('#editName').val(name);
                $('#editName').val(name);
                $('#editorder').val(order);
                $('#editSummernote').summernote('code', description);

                // ইমেজ প্রিভিউ সেট করা
                if (image && image !== "") {
                    // টেবিলের পাথের সাথে মিল রেখে এখানে পাথ দিন
                    let imageUrl = "{{ asset('images/categories') }}/" + image;
                    $('#editBlah').attr('src', imageUrl).show();
                } else {
                    // ইমেজ না থাকলে প্লেসহোল্ডার
                    $('#editBlah').attr('src', "{{ asset('no-image.png') }}").show();
                }

                $('#editModal').modal('show');
            });


            <!--------------------------------------------- 5. Handle update change (Example for subcategory status toggle) ---------------------------->
           $(document).ready(function() {
            // Summernote ইনিশিয়ালাইজ করুন (যদি আগে না করা থাকে)
            $('#editSummernote').summernote();

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
                    url: "{{ url('admin/categories/update') }}/" + id,
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
                        fetchCategories(); // টেবিল রিফ্রেশ করবে
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




            }); // Only one closing bracket needed here

                </script>
@endsection
