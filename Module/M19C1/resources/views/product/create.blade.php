@extends('layouts.master')

@section('content')
    <div class="container py-4">

        {{-- Page Header --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Create Product</h4>
            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                ← Back to List
            </a>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Validation Errors (Top Summary) --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Please fix the following errors:
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Product Information</h5>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data"
                            class="row g-3">

                            @csrf

                            {{-- Name --}}
                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    Product Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    placeholder="Enter product name">

                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Price --}}
                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    Price <span class="text-danger">*</span>
                                </label>
                                <input type="number" step="0.01" name="price"
                                    class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
                                    placeholder="Enter price">

                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Description --}}
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Write product description...">{{ old('description') }}</textarea>

                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Image --}}
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Product Image (optional)</label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror">

                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <small class="text-muted d-block mt-1">
                                    Allowed: JPG, JPEG, PNG (Max: 2MB)
                                </small>
                            </div>

                            {{-- Buttons --}}
                            <div class="col-12 d-flex gap-2">
                                <button type="submit" class="btn btn-success px-4">
                                    Save
                                </button>
                                <a href="{{ route('products.create') }}" class="btn btn-secondary px-4">
                                    Reset
                                </a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
