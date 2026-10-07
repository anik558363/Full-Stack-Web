@extends('layouts.app')

@section('title', 'Login Page')


@section('content')
    <h1> This is the Home Page </h1>

 @if (Auth::check())
    <p>Welcome, {{ Auth::user()->name }}!</p>
 @else
    <p>Welcome, Guest!</p>

@endif


@endsection
