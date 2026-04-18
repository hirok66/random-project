@extends('layouts.app')

@section('content')

    <div class="container mt-3">

        <div class="card">
            <div class="card-header">
                <h3>Subscribers</h3>
            </div>

            <div class="card-body">

                {{-- SUCCESS --}}
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- BULK FORM --}}



                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($subscribers as $subscriber)
                                <tr>



                                    {{-- NAME --}}
                                    <td>
                                        {{ optional($subscriber->author)->first_name ?? 'No Author' }}
                                    </td>

                                    {{-- EMAIL --}}
                                    <td>{{ $subscriber->email }}</td>

                                    {{-- SINGLE SEND --}}
                                    <td>
                                    <a href="{{ route('send.single.email', $subscriber->id) }}" class="btn btn-primary btn-sm"> Send </a>

                                    </td>
                                    <td>
                                      <buttaon class="btn btn-danger btn-sm">  Delete </buttaon>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>



                {{-- PAGINATION --}}
                <div class="d-flex justify-content-center mt-4">
                    {{ $subscribers->links() }}
                </div>

            </div>
        </div>
    </div>



@endsection
