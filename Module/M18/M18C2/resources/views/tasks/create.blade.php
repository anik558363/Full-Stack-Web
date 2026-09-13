@extends('layouts.app')
@section('content')
    <h2>Add New Task</h2>

    <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="desc" class="form-control"></textarea>
        </div>
        <div>
            <label>Image</label>
            <input name="image" type="file" class="form-control">
        </div>
        <button class="btn btn-primary mt-5" type="submit">SAVE</button>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-5">BACK</a>
    </form>
@endsection
