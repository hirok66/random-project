@extends('layouts.app')
@section('content')

<h3>Search Result for: "{{ $query }}"</h3>

@if($categories->count() > 0)
<h4 class="text-success">Categories</h4>

<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{!! $item->description !!}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif


@if($users->count() > 0)
<h4 class="text-success">USers</h4>

<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>#mail</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name}}</td>
            <td>{!! $item->email !!}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection

