@extends('layouts.dashboard')

@section('title', 'Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Categories</li>
@endsection

@section('main')

    <div class="mb-5">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-outline-primary">New</a>
    </div>

    @if($success)
    <div class="alert alert-success">
        {{ $success }}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Created At</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->status }}</td>
                <td>{{ $category->created_at }}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection