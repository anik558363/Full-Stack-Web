<?php

echo "Enter a Number: ";
$number = (float) readline();

if ($number == 0) {
    echo "The number is zero and even.";
} elseif ($number > 0) {
    if (((int)$number) % 2 == 0) {
        echo "The number $number is positive and even.";
    } else {
        echo "The number $number is positive and odd.";
    }
} else {
    if (((int)$number) % 2 == 0) {
        echo "The number $number is negative and even.";
    } else {
        echo "The number $number is negative and odd.";
    }
}
