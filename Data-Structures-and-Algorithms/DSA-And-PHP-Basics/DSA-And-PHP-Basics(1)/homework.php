<?php


// Write a PHP script to print numbers from 1 to 10


// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "<br>";
// }


// Create a function to check if a number is prime

function isPrime( int $num) : bool {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


// Test the function
$number = 70;   
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}



// Use arrays to store and display a list of student names

$students = ["Alice", "Bob", "Charlie", "David", "Eva"];

echo "<h3>List of Students:</h3>";
echo "<ul>";
foreach ($students as $student) {
    echo "<li>$student</li>";
}


echo "</ul>";



$numbers = [1, 2, 10,  3, 4, 5];

// $big = $numbers[0];

// foreach ($numbers as $number) {
   
//     if ($number > $big) {
//         $big = $number;
//     }


// }


// echo "The largest number is: " . $big;

$numbers = [40, 10, 50, 30, 20];

sort($numbers); 

echo "Last element: " . $numbers[count($numbers) - 1];







?>