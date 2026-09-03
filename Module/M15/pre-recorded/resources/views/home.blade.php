<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageName ?? 'Default Name' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>





    <div class="container">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Panda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </div>





    <section class="text-center">

        <h1> Welcome to {{ $pageName ?? 'Default Name' }} Page </h1>
        {{-- {!! $htmlCode !!} --}}


        @if ($age > 18)
            <h2>Age is : {{ $age ?? 'Default Age' }}</h2>
        @elseif ($age == 18)
            <h2>Age is Child</h2>
        @else
            <h2>Age is not eligible</h2>
        @endif


        {{-- <p> {{ var_dump($userList) }} </p> --}}

        {{--
        @empty($userList)
            <h2> User List is Empty </h2>
        @endempty

        <p>

            {{ var_dump($userList) }}

        </p>



        @for ($i = 0; $i <= 10; $i++)
            <p> {{ $i }} </p>
        @endfor

        <br>



        @php
            $count = 1;
        @endphp

        @while ($count <= 5)
            <p> {{ $count }} </p>

            @php

                $count++;

            @endphp
        @endwhile --}}

        <ul>

            @foreach ($userList as $user)


@php
$class = $loop->even ? 'text-danger' : 'text-info';
@endphp

                <li class="{{ $class }}">
                    Last : {{ $loop->last }}
                    Name : {{ $user['name'] }}
                    Email : {{ $user['email'] }}
                </li>
            @endforeach

        </ul>




    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
