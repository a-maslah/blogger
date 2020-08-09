@extends('layouts.app')

@section('content')
<div class="row">

    <div class="col-lg-8">
        <h1 class="mt-4">{{ $post->title }}</h1>
        <hr>
        <p>Posted on {{ $post->created_at }}</p>
        <hr>
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
        <hr>
        <p class="lead">{{ $post->content }}</p>
        <hr>

        <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('add-comment') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" rows="3"></textarea>
                    </div>
                    <input type="hidden" value="{{ $post->id }}" name="post_id" />
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

        @foreach (json_decode($post->comments) as $comment)
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                <h5 class="mt-0">{{ $comment->name }}</h5>
                {{ $comment->content }}
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-md-4">
        <div class="card my-4">
            <h5 class="card-header">Category</h5>
            <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">{{ json_decode($post->category)->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>

</div>
@endsection