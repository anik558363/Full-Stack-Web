@extends('layouts.app')

@section('title', 'Edit product — Product Ledger')

@section('content')

    <div class="page-head">
        <div>
            <h1>Edit product</h1>
            <p>Update the details for <span class="mono">{{ $product->product_id }}</span>.</p>
        </div>
    </div>

    <div class="form-card">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div>
                    <div class="upload-box">
                        <img id="preview" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                        <input type="file" name="image" accept="image/*" onchange="previewImage(event)">
                        <p class="upload-hint">Leave empty to keep the current image.</p>
                        @error('image') <div class="field-error">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div>
                    <div class="row-2">
                        <div class="field">
                            <label for="product_id">Product ID</label>
                            <input type="text" id="product_id" name="product_id" class="mono" value="{{ old('product_id', $product->product_id) }}">
                            @error('product_id') <div class="field-error">{{ $message }}</div> @enderror
                        </div>
                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}">
                            @error('name') <div class="field-error">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="description">Description</label>
                        <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
                        @error('description') <div class="field-error">{{ $message }}</div> @enderror
                    </div>

                    <div class="row-2">
                        <div class="field">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" id="price" name="price" class="mono" value="{{ old('price', $product->price) }}">
                            @error('price') <div class="field-error">{{ $message }}</div> @enderror
                        </div>
                        <div class="field">
                            <label for="stock">Stock</label>
                            <input type="number" id="stock" name="stock" class="mono" value="{{ old('stock', $product->stock) }}">
                            @error('stock') <div class="field-error">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update product</button>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (!file) return;
            document.getElementById('preview').src = URL.createObjectURL(file);
        }
    </script>

@endsection
