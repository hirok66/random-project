@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <div class="row">

            {{-- ================= LEFT SIDE TABLE ================= --}}
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Privacy Policy List</h5>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($policies as $key => $policy)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $policy->title }}</td>
                                        <td>{!!  $policy->des !!}</td>

                                        <td>
                                            <a href="{{ route('become.status', $policy->id) }}"
                                                class="btn btn-sm {{ $policy->status == 'active' ? 'btn-success' : 'btn-danger' }}">

                                                {{ $policy->status == 'active' ? 'Active' : 'Inactive' }}

                                            </a>
                                        </td>

                                        <td>
                                            <a href="{{ route('become.edit', $policy->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>

                                            <a href="{{ route('become.delete', $policy->id) }}"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- ================= RIGHT SIDE FORM ================= --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Add Privacy Policy</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('become.store') }}" method="POST">
                            @csrf

                            {{-- Title --}}
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                                @error('title')
                                    <strong class="text text-danger">{{ $message }}</strong>

                                @enderror
                            </div>

                            {{-- Description --}}
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="des" id="summernote"></textarea>
                                @error('des')
                                    <strong class="text text-danger">{{ $message }}</strong>

                                @enderror
                            </div>

                            {{-- Submit --}}
                            <button type="submit" class="btn btn-success w-100">
                                Save Policy
                            </button>

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
