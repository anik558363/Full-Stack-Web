<?php


for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }

    echo "<br>";
}



$students = [
    ['name' => "John Deo", 'age' => 20],
    ['name' => "John Deo", 'age' => 21],
    ['name' => "John Deo", 'age' => 22],
];



foreach ($students as $key => $student) {
    foreach ($student as $keyl => $value) {
       echo "$keyl : $value";
    }

    echo "<br>";
}
