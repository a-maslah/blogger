@extends('layouts.app')

@section('content')
    <h1>Add New Post</h1>
    <form method="POST" action="{{ route('save-post') }}">
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input class="form-control"
                id="title" 
                type="text" 
                name="title">
        </div>
        <div class="form-group">
            <label for="content">Choose Post Category</label>
            <select class="form-control" name="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea 
                class="form-control"
                id="content"
                name="content">
            </textarea>
        </div>
        <button type="submit"
            class="btn btn-primary">
        Publish</button>
    </form>
@endsection