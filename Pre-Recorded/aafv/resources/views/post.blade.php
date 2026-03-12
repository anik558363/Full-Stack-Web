@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Create Post</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('post') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title') }}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
