<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
</head>

<body>


    {{-- <?php

    $mark = 65;

    ?> --}}

    {{-- <h1> Your Mark is: <?php echo $mark; ?> </h1> --}}


    {{-- <?php

    if ($mark >= 90) {
        echo '<h2> You got A+ </h2>';
    } else {
        echo '<h2> You got F </h2>';
    }

    ?> --}}


{{-- @if ($mark >= 90)
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

 --}}



 @php
     $day = 'Thursday';

     $names = ['John', 'Jane', 'Alice', 'Bob'];

 @endphp


@switch($day)
    @case('Monday')
        <p>It's Monday!</p>
        @break
    @case('Tuesday')
        <p>It's Tuesday!</p>
        @break
    @case('Wednesday')
        <p>It's Wednesday!</p>
        @break
    @case('Thursday')
        <p>It's Thursday!</p>
        @break
    @case('Friday')
        <p>It's Friday!</p>
        @break
    @case('Saturday')
        <p>It's Saturday!</p>
        @break
    @case('Sunday')
        <p>It's Sunday!</p>
        @break
    @default

@endswitch



@for ($i = 1; $i <= 10; $i++)
    <p>The value is: {{ $i }}</p>
@endfor



@foreach ($names as $name)
    <p>This name is {{ $name }}!</p>

@endforeach



@php

    $marks = 90;


@endphp


<h2 style="{{ $marks >= 90 ? 'color: green;' : 'color: red;' }}">Your marks are: {{ $marks }}</h2>



</body>

</html>
