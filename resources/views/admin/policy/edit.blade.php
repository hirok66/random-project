@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
>

        {{-- ================= RIGHT SIDE FORM ================= --}}
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Add Privacy Policy</h5>
                </div>

                <div class="card-body">

                   <form action="{{ route('policy.update', $policies->id) }}" method="post">
                        @csrf

                        {{-- Title --}}
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" value="{{ $policies->title }}" class="form-control" >
                            @error('title')
                            <strong class="text text-danger">{{ $message }}</strong>

                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                           <textarea name="des" id="summernote"  >
                               {{ $policies->des }}
                           </textarea>
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
