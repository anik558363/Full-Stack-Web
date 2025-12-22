@extends('layouts.master')

@section('content')
<div class="container py-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Product List</h4>

        {{-- Create button (route বানানো থাকলে) --}}
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            + Add Product
        </a>
    </div>

    {{-- Alert message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Table Card --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th>Name</th>
                            <th style="width: 120px;">Price</th>
                            <th>Description</th>
                            <th style="width: 120px;">Image</th>
                            <th style="width: 220px;" class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($products as $key => $product)
                            <tr>
                                <td>{{ $key + 1 }}</td>

                                <td class="fw-semibold">{{ $product->name }}</td>

                                <td>
                                    <span class="badge bg-success">
                                        {{ $product->price }}
                                    </span>
                                </td>

                                <td class="text-muted">
                                    {{ \Illuminate\Support\Str::limit($product->description, 50) }}
                                </td>

                                <td>
                                    {{-- যদি image url/path থাকে --}}
                                    @if($product->image)
                                        <img src="{{ asset($product->image) }}"
                                             alt="image"
                                             class="rounded"
                                             style="width:60px;height:60px;object-fit:cover;">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('products.show', $product->id) }}"
                                       class="btn btn-sm btn-outline-info">
                                        View
                                    </a>

                                    <a href="{{ route('products.edit', $product->id) }}"
                                       class="btn btn-sm btn-outline-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('products.destroy', $product->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    No products found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>

    {{-- Pagination (যদি paginate() ব্যবহার করো) --}}
    <div class="mt-3">
        {{-- $products = Product::latest()->paginate(10); --}}
        {{ $products->links() }}
    </div>

</div>
@endsection
