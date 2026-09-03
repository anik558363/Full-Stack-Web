@extends('layout.app')




@section('title', 'About')

@section('content')
    <h1>Welcome to the About Page</h1>
    <p>This is the content for the about page.</p>


        <x-alert />
    <x-alert type='danger' />
    <x-alert type='info' />

@endsection


