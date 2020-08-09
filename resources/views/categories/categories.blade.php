@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <a href="{{ route('new-category') }}" type="button" class="btn btn-primary float-right">New Category</a>
    <br/><br/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection