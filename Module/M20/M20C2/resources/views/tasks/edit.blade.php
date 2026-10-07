@extends('layouts.app')
@section('content')
    <h2>Edit Task</h2>

    <form method="POST" action="{{route('tasks.update',$tasks->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{$tasks->title}}" class="form-control" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="desc" class="form-control">{{$tasks->description}}</textarea>
        </div>
        <div>
            <label>Image</label>
            <input name="image" type="file" class="form-control">
            @if($tasks->image)
                <img style="width: 100px" src="{{ asset('storage/'.$tasks->image) }}">
            @endif
        </div>
        <button class="btn btn-primary mt-5" type="submit">UPDATE</button>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-5">BACK</a>
    </form>
@endsection
