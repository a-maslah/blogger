@extends('layouts.app')

@section('content')
    <h1>Add New Category</h1>
    <form method="POST" action="{{ route('save-category') }}">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input class="form-control"
                id="name" 
                type="text" 
                name="name">
        </div>
        <button type="submit"
            class="btn btn-primary">
        Save</button>
    </form>
@endsection