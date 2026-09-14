<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Product Ledger')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="topbar">
        <div class="topbar-inner">
            <a href="{{ route('products.index') }}" class="topbar-title">Product <span>Ledger</span></a>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add product</a>
        </div>
    </div>

    <div class="shell">
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

</body>
</html>
