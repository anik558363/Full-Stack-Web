@extends('layouts.master')

@section('content')
    <div class="container py-4">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Edit Product</h4>
            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                ← Back to List
            </a>
        </div>

        {{-- Validation Errors --}}
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
                    <div class="card-header bg-warning">
                        <h5 class="mb-0">Update Product Information</h5>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('products.update', $product->id) }}"
                            enctype="multipart/form-data" class="row g-3">
                            @csrf
                            @method('PUT')

                            {{-- Name --}}
                            <div class="col-md-6">
                                <label class="form-label fw-bold">
                                    Product Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $product->name) }}" placeholder="Enter product name">
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
                                    class="form-control @error('price') is-invalid @enderror"
                                    value="{{ old('price', $product->price) }}" placeholder="Enter price">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Description --}}
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Write product description...">{{ old('description', $product->description) }}</textarea>
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

                                {{-- Current Image Preview --}}
                                @if ($product->image)
                                    <div class="mt-2">
                                        <small class="text-muted d-block mb-1">Current Image:</small>
                                        <img src="{{ asset($product->image) }}" alt="product" class="rounded border"
                                            style="width:80px;height:80px;object-fit:cover;">
                                    </div>
                                @endif
                            </div>

                            {{-- Buttons --}}
                            <div class="col-12 d-flex gap-2">
                                <button type="submit" class="btn btn-success px-4">
                                    Update
                                </button>
                                <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">
                                    Cancel
                                </a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
