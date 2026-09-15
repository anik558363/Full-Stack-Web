@extends('layouts.app')

@section('title', $product->name . ' — Product Ledger')

@section('content')

    <div class="page-head">
        <div>
            <p style="margin-bottom:6px;"><a href="{{ route('products.index') }}" class="btn btn-outline btn-sm">Back to products</a></p>
        </div>
    </div>

    <div class="spec-card">
        <div class="spec-image">
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
        </div>
        <div class="spec-body">
            <h2>{{ $product->name }}</h2>
            <p class="spec-id mono">{{ $product->product_id }}</p>

            @if ($product->description)
                <p class="spec-desc">{{ $product->description }}</p>
            @endif

            <dl class="spec-list">
                <div class="spec-row">
                    <dt>Price</dt>
                    <dd class="mono">৳{{ number_format($product->price, 2) }}</dd>
                </div>
                <div class="spec-row">
                    <dt>Stock</dt>
                    <dd>
                        @if (is_null($product->stock) || $product->stock <= 0)
                            <span class="badge badge-out">Out of stock</span>
                        @elseif ($product->stock < 10)
                            <span class="badge badge-low">{{ $product->stock }} left</span>
                        @else
                            <span class="badge badge-in">{{ $product->stock }} in stock</span>
                        @endif
                    </dd>
                </div>
                <div class="spec-row">
                    <dt>Added</dt>
                    <dd class="mono">{{ \Carbon\Carbon::parse($product->created_at)->format('d M Y') }}</dd>
                </div>
                <div class="spec-row">
                    <dt>Last updated</dt>
                    <dd class="mono">{{ \Carbon\Carbon::parse($product->updated_at)->format('d M Y') }}</dd>
                </div>
            </dl>

            <div class="spec-actions">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit product</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Delete this product? This can\'t be undone.');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

@endsection
