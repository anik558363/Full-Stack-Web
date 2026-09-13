<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Task Management')
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body>

    {{-- Navbar --}}

    <nav class="navbar navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand"
               href="{{ route('tasks.index') }}">

                Task Management

            </a>

        </div>

    </nav>


    {{-- Main Content --}}

    <main class="container py-4">

        @yield('content')

    </main>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
