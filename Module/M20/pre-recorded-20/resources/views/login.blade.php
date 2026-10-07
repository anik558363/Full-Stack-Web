
@extends('layouts.app')

@section('title', 'Login Page')

@section('content')

    {{-- Registration Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    {{-- Login Form --}}
    <form action="{{ route('login') }}" method="POST">

        @csrf

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">
                Email address
            </label>

            <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email') }}"
            >

            @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>


        {{-- Password --}}
        <div class="mb-3">
            <label for="password" class="form-label">
                Password
            </label>

            <input
                type="password"
                class="form-control @error('email') is-invalid @enderror"
                id="password"
                name="password"
            >
        </div>


        <button type="submit" class="btn btn-primary">
            Login
        </button>

    </form>

@endsection
