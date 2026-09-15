@extends('layouts.app')

@section('title', 'Products — Product Ledger')

@section('content')

    <div class="page-head">
        <div>
            <h1>Products</h1>
            <p>{{ $products->total() }} item{{ $products->total() === 1 ? '' : 's' }} on record</p>
        </div>
    </div>

    @if ($products->count())
        <div class="ledger-wrap">
            <table class="ledger">
                <thead>
                    <tr>
                        <th class="row-index">#</th>
                        <th>Image</th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="row-index mono">
                                {{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</td>
                            <td>
                                <img class="thumb" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                            </td>
                            <td class="cell-id mono">{{ $product->product_id }}</td>
                            <td class="cell-name">{{ $product->name }}</td>
                            <td class="cell-price mono">৳{{ number_format($product->price, 2) }}</td>
                            <td>
                                @if (is_null($product->stock) || $product->stock <= 0)
                                    <span class="badge badge-out">Out of stock</span>
                                @elseif ($product->stock < 10)
                                    <span class="badge badge-low">{{ $product->stock }} left</span>
                                @else
                                    <span class="badge badge-in">{{ $product->stock }} in stock</span>
                                @endif
                            </td>
                            <td>
                                <div class="actions-cell">
                                    <a href="{{ route('products.show', $product->id) }}"
                                        class="btn btn-outline btn-sm">View</a>
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-outline btn-sm">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this product? This can\'t be undone.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-wrap">
            {{ $products->links() }}
        </div>
    @else
        <div class="ledger-wrap">
            <div class="empty-state">
                <h3>No products yet</h3>
                <p>Add your first product to start the ledger.</p>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add product</a>
            </div>
        </div>
    @endif

@endsection
