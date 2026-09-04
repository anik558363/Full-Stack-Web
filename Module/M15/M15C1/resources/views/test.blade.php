<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <?php

    $mark = 65;

    ?>

    <h1> Your Mark is: <?php echo $mark; ?> </h1>


    {{-- <?php

    if ($mark >= 90) {
        echo '<h2> You got A+ </h2>';
    } else {
        echo '<h2> You got F </h2>';
    }

    ?> --}}


@if ($mark >= 90)
    <h2> You got A+ </h2>

@elseif ($mark >= 60)
    <h2> You got A </h2>
@else

    <h2> You got F </h2>
@endif

@php
    $marks = 60;
@endphp

<h2 style="color: #fdd">Your marks are: {{ $marks }}</h2>



</body>

</html>
