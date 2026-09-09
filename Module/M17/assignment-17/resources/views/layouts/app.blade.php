<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description" content="@yield('description', '')" />

    <meta name="author" content="@yield('author', '')" />

    <title>@yield('title', 'My Website')</title>

    <!-- Favicon -->
    <link rel="icon"
          type="image/x-icon"
          href="{{ asset('assets/favicon.ico') }}" />

    <!-- Custom Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin />

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
        rel="stylesheet" />

    <!-- Core Theme CSS -->
    <link
        href="{{ asset('css/styles.css') }}"
        rel="stylesheet" />

    @stack('styles')
</head>


<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        {{-- Header --}}
        @include('layouts.header')

        {{-- Main Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('layouts.footer')


    </main>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
