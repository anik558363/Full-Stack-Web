@extends('layouts.app')

@section('title', 'Register Page')


@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <form action="{{ route('register.submit') }}" method="POST">
        @csrf

        {{-- Name --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>

            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">

            @error('name')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>


        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>

            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">

            @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>


        {{-- Password --}}
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>

            <input type="password" class="form-control" id="password" name="password">

            @error('password')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>


        {{-- Register Button --}}
        <button type="submit" class="btn btn-primary">
            Register
        </button>

    </form>

@endsection
