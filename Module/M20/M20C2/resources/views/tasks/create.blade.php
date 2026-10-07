@extends('layouts.app')
@section('content')
    <h2>Add New Task</h2>

    @if ('error')
        <div class="text-danger">{{ session('error') }}</div>
    @endif



    <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " value="{{ old('title') }}">

            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>
        <div>
            <label>Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror ">{{ old('description') }}</textarea>
              @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Image</label>
            <input name="image" type="file" class="form-control @error('image') is-invalid @enderror">
              @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary mt-5" type="submit">SAVE</button>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-5">BACK</a>
    </form>
@endsection
