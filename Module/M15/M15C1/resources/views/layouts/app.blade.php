<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

        @yield('title', 'Default Title')

    </title>
    
</head>

<body>

    <div>
        This is Navbar
    </div>

    <div>
        @yield('content')
    </div>

    <p>&copy; 2023 My App. All rights reserved.</p>

</body>

</html>
