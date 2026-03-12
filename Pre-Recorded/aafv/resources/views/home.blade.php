@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<h2>Home page</h2>

@auth
    <p>Welcome, {{ auth()->user()->name }}!</p>
@endauth

<hr>

<h4>All Posts</h4>

@if($posts->count() > 0)
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $post->title }}</strong>
                    <br>
                    <small>by {{ $post->user->name }}</small>
                </div>

                @if(Auth::check() && $post->user_id == Auth::id())
                    <form action="{{ route('post.delete', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
@else
    <p>No posts found.</p>
@endif

@endsection
