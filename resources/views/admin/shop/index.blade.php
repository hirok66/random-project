@extends('layouts.app')

@section('content')
        <div class="container mt-3">

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>shop Management</h3>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add shop</button>
                </div>

                <div class="card-body">

                   <div class="mb-3">
        <div class="input-group" style="max-width: 300px;">
            <span class="input-group-text bg-white border-end-0">
                <i class="fas fa-search text-muted"></i> <!-- FontAwesome Icon -->
            </span>
            <input type="text" id="search" class="form-control border-start-0 ps-0" placeholder="Search shops...">
        </div>
    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Sl</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="shopTableBody"> <!-- এখানে ডাটা লোড হবে -->
                            @include('admin.shop.table')
                        </tbody>
                    </table>
                    <div id="paginationLinks" class="d-flex justify-content-center mt-4">
                        {{ $shops->links() }}
                    </div>

                </div>
            </div>

            <!-- Add shop Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="formData" enctype="multipart/form-data">

                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add shop</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Shop Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    @error('name')
                                        <div class="text-danger error">{{ $message }}</div>
                                    @enderror
                                </div>
                                     <div class="mb-3">
                            <label for="address" class="form-label">Shop Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                             @error('address')
                                        <div class="text-danger error">{{ $message }}</div>
                                    @enderror<!-- AJAX এররের জন্য -->
                                    </div>

                                  <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error('image')
                                        <div class="text-danger error">{{ $message }}</div>
                                    @enderror
                                </div>




                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- edit shop Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">




                <form id="editData" enctype="multipart/form-data"> <!-- এডিট করার জন্য আলাদা আইডি -->
                    @csrf
                    <!-- ইউজারের আইডি ধরার জন্য নিচের হিডেন ইনপুটটি অবশ্যই লাগবে -->
                    <input type="hidden" id="editshopId" name="id">

                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit shop</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editname" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editname" name="name">
                            <div class="text-danger error-edit-name"></div> <!-- AJAX এররের জন্য -->
                        </div>





                                     <div class="mb-3">
                            <label for="editaddress" class="form-label">Shop Address</label>
                            <input type="text" class="form-control" id="editaddress" name="address">
                             @error('address')
                                        <div class="text-danger error">{{ $message }}</div>
                                    @enderror<!-- AJAX এররের জন্য -->
                        </div>


                        <div class="mb-3">
                            <label for="editStatus" class="form-label">Shop Status</label>
                            <select name="status" id="editStatus" class="form-control">

                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                             @error('status')
                                        <div class="text-danger error">{{ $message }}</div>
                                    @enderror<!-- AJAX এররের জন্য -->
                        </div>

                                    <div class="mb-3">
                                        <label for="editimage" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="editimage" name="image">
                                        <!-- এখানে ইমেজ প্রিভিউ দেখাবে -->
                                        <div class="mt-2">
                                            <img id="showOldImage" src="" width="80" class="img-thumbnail" style="display:none;">
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update Changes</button> <!-- টেক্সট পরিবর্তন -->
                    </div>
                </form>
            </div>
        </div>
    </div>


        </div>
@endsection


    @section('footer')
            <script>
                $(document).ready(function () {
                    $.ajaxSetup({
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                    });



                    // ২. পেজিনেশন লিঙ্কে ক্লিক করলে ডাটা লোড
                    $(document).on('click', '#paginationLinks a', function (e) {
                        e.preventDefault();
                        let page = $(this).attr('href').split('page=')[1];
                        fetchData(page);
                    });

                    // ৩. নতুন ইউজার অ্যাড করা
                    $('#formData').on('submit', function (e) {
                        e.preventDefault();
                        $('.error').text('');
                        let formData = new FormData(this);
                        $.ajax({
                            url: "{{ url('/admin/shops/store') }}",
                            method: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                Swal.fire({
                                    title: "New shop Added Successfully",
                                    icon: "success",
                                    draggable: true
                                });
                                $('#exampleModal').modal('hide');
                                $('#formData')[0].reset();
                                fetchData();
                            },
                            error: function (error) {
                                let errors = error.responseJSON.errors;
                                $.each(errors, function (key, value) {
                                $([".".key])
                                });
                            }
                        });
                    });

                    // ৪. এডিট বাটনে ক্লিক করে মোডালে ডাটা আনা
                    $(document).on('click', '.edit-btn', function() {
                        let id = $(this).data('id');
                        let name = $(this).data('name');
                        let address = $(this).data('address');
                        let status = $(this).data('status');
                        let image = $(this).data('image');

                         // ইমেজ প্রিভিউ সেট করা (আপনার ফোল্ডারের নাম 'uploads' হলে)
                          if (image) {
                            $('#showOldImage').attr('src', "{{ asset('frontend/shops') }}/" + image).show();
                        } else {
                            $('#showOldImage').hide();
                        }
                        $('#editshopId').val(id);
                        $('#editname').val(name);
                        $('#editaddress').val(address);
                        $('#editstatus').val(status);
                        $('#editModal').modal('show');


                    });

                    // ৫. ডাটা আপডেট করা
                    $('#editData').on('submit', function (e) {
                        e.preventDefault();
                        let formData = new FormData(this);
                        $.ajax({
                            url: "{{ url('/admin/shops/update') }}", // রাউটটি চেক করে নিন
                            method: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                Swal.fire({
                                    title: "Data update Successfully",
                                    icon: "success",
                                    draggable: true
                                });
                                $('#editModal').modal('hide');
                                fetchData();
                            }
                        });
                    });


                    // ৭. update পরিবর্তন
                    $(document).on('click', '.change-status', function () {
                        let btn = $(this);
                        let shopId = btn.data('id');
                        let currentStatus = btn.data('status');
                        let newStatus = (currentStatus === 'active') ? 'inactive' : 'active';

                        $.ajax({
                            url: "{{ url('/admin/shops/edit') }}",
                            method: "POST",
                            data: { id: shopId, status: newStatus },
                            success: function (response) {
                                fetchData(); // সরাসরি টেবিল রিফ্রেশ করা ভালো
                                Swal.fire({
                                    title: "Update Successfully",
                                    icon: "success",
                                    draggable: true

                                });
                                 fetchData();
                            }
                        });
                    });
                    // ৭. স্ট্যাটাস পরিবর্তন
                    $(document).on('click', '.status', function () {
                        let btn = $(this);
                        let shopId = btn.data('id');
                        let currentStatus = btn.data('status');
                        let newStatus = (currentStatus === 'active') ? 'inactive' : 'active';

                        $.ajax({
                            url: "{{ url('/admin/shops/status') }}",
                            method: "get",
                            data: { id: shopId, status: newStatus },
                            success: function (response) {
                                fetchData(); // সরাসরি টেবিল রিফ্রেশ করা ভালো
                                Swal.fire({
                                    title: "Update Successfully",
                                    icon: "success",
                                    draggable: true

                                });
                                 fetchData();
                            }
                        });
                    });

                    // SEARCH
                    $(document).on('keyup', '#search', function() {
                let query = $(this).val();
                fetchData(1, query); // fetchData ফাংশনে কুয়েরি পাঠানো হচ্ছে
            });

            // আপনার fetchData ফাংশনটি একটু আপডেট করে নিন
            function fetchData(page = 1, search = '') {
                $.ajax({
                    url: "{{ url('/admin/shops/fetch') }}",
                    type: "GET",
                    data: {
                        page: page,
                        search: search // সার্চ ডাটা পাঠানো হচ্ছে
                    },
                    success: function (response) {
                        $('#shopTableBody').html(response.table);
                        $('#paginationLinks').html(response.pagination);
                    }
                });
            }


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
                            url: "/admin/shops/delete/" + id,
                            method: "DELETE",
                            success: function(response) {

                                Swal.fire({
                                    title: "Deleted!",
                                    text: "The shop has been deleted.",
                                    icon: "success"
                                });
                                fetchData(); // টেবিল রিফ্রেশ
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
                    // পেজ লোড হলে ডাটা দেখাবে
                    fetchData();
                });
            </script>
    @endsection




