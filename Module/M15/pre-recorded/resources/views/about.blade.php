@extends('layout.app')


@push('styles')

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

@endpush

@section('title', 'About')

@section('content')
    <h1>Welcome to the About Page</h1>
    <p>This is the content for the about page.</p>


    <x-alert />
    <x-alert type='danger' />
    <x-alert type='info' />

@endsection
