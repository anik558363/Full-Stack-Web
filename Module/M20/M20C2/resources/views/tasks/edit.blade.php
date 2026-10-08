@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>

    <form method="POST" action="{{ route('tasks.update', $tasks->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        {{-- Title --}}
        <div class="mb-3">
            <label>Title</label>

            <input type="text" name="title" value="{{ old('title', $tasks->title) }}"
                class="form-control @error('title') is-invalid @enderror">

            @error('title')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>


        {{-- Description --}}
        <div class="mb-3">
            <label>Description</label>

            <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $tasks->description) }}</textarea>

            @error('description')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>


        {{-- Image --}}
        <div class="mb-3">
            <label>Image</label>

            <input name="image" type="file" class="form-control @error('image') is-invalid @enderror">

            @error('image')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror


            {{-- Old Image --}}
            @if ($tasks->image)
                <div class="mt-2">
                    <img style="width: 100px" src="{{ asset('storage/' . $tasks->image) }}" alt="Task Image">
                </div>
            @endif

        </div>


        {{-- Buttons --}}
        <button class="btn btn-primary mt-3" type="submit">
            UPDATE
        </button>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">
            BACK
        </a>

    </form>
@endsection
