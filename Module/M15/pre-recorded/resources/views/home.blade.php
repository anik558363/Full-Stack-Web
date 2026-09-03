@extends('layout.app')




@section('title', 'Home')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>This is the content for the home page.</p>



    <x-alert />
    <x-alert type='danger' />
    <x-alert type='info' />



@endsection
