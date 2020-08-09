@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('new-post') }}" type="button" class="btn btn-primary float-right">New Post</a>
    <br/><br/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Category</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ json_decode($post->category)->name }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <a href="{{ route('show-post', $post->id) }}" type="button" class="btn btn-link">Show details</a>
                        <a href="{{ route('delete-post', $post->id) }}" type="button" class="btn btn-link text-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection