@extends('layouts.app')

@section('title', 'Add product — Product Ledger')

@section('content')

    <div class="page-head">
        <div>
            <h1>Add product</h1>
            <p>Enter the details below to add a new entry to the ledger.</p>
        </div>
    </div>

    <div class="form-card">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-grid">
                <div>
                    <div class="upload-box">
                        <img id="preview" src="https://placehold.co/180x180/FAF8F3/DAD5C7?text=Image" alt="Preview">
                        <input type="file" name="image" accept="image/*" onchange="previewImage(event)">
                        <p class="upload-hint">JPG, PNG or WEBP. Max 2MB.</p>
                        @error('image')
                            <div class="field-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="row-2">
                        <div class="field">
                            <label for="product_id">Product ID</label>
                            <input type="text" id="product_id" name="product_id" class="mono"
                                value="{{ old('product_id') }}" placeholder="e.g. SKU-0001">
                            @error('product_id')
                                <div class="field-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                placeholder="Product name">
                            @error('name')
                                <div class="field-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" placeholder="Optional details about this product">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="field-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row-2">
                        <div class="field">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" id="price" name="price" class="mono"
                                value="{{ old('price') }}" placeholder="0.00">
                            @error('price')
                                <div class="field-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field">
                            <label for="stock">Stock</label>
                            <input type="number" id="stock" name="stock" class="mono" value="{{ old('stock') }}"
                                placeholder="0">
                            @error('stock')
                                <div class="field-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save product</button>
                        <a href="{{ route('products.index') }}" class="btn btn-outline">Cancel</a>
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
