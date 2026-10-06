<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>User Dashboard</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>

    <form action="{{ route('custom.logout') }}" method="POST">
        @csrf

        <button type="submit">
            Log Out
        </button>
    </form>

    <h1>Welcome to the Dashboard</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <p>Your Name: {{ session('custom_user_name') }}</p>

    <p>Your Email: {{ session('custom_user_email') }}</p>

</body>
</html>
