<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1 style='color: #00f;'>view tesddt page</h1>

    <?php

    $marsk = 90;

    ?>

    <h2>Your mark is: <?php echo $marsk; ?> </h2>


    <?php

    $marks = 80;

    if ($marks >= 80) {
        echo "<h2 style='color: green;'>You have passed the exam!</h2>";
    } else {
        echo "<h2 style='color: red;'>You have failed the exam.</h2>";
    }

    ?>

    {{-- useing by laravel directive --}}


    @if ($marks >= 80)
        <h2 style='color: green;'>You have passed the exam! (Using Blade Directive)</h2>
    @else
        <h2 style='color: red;'>You have failed the exam. (Using Blade Directive)</h2>
    @endif


    @if ($marks >= 90)
        <h1> Your grad is A+ </h1>
    @elseif ($marks >= 80)
        <h1> Your grad is A </h1>
    @else
        <h1> Your Are Faield</h1>
    @endif


    {{-- useing by switch case --}}


    @switch($marks)
        @case(100)
            <h1> You got full marks! </h1>
            @break
        @case(90)
            <h1> You got 90 marks! </h1>
            @break
        @case(80)
            <h1> You got 80 marks! </h1>
            @break
        @default
            <h1> You did not get full marks. </h1>
    @endswitch


     {{-- useing by for loop --}}

    @for ($i = 1; $i <= 5; $i++)
        <h2> This is iteration number: {{ $i }} </h2>
    @endfor


    {{-- useing by foreach loop --}}


    @php
        $fruits = ['Apple', 'Banana', 'Orange', 'Mango'];
    @endphp

    <ul>
        @foreach ($fruits as $fruit)
            <li> {{ $fruit }} </li>
        @endforeach
    </ul>


    <h1 style="{{ $marks >= 80 ? 'color: green' : 'color: red' }}"> Your Marks {{ $marks }} </h1>

</body>

</html>
