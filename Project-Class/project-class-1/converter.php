<?php

const FACTOR = 9 / 5;
const OFFSET = 32;


echo "Enter your temparature : ";
$temparature = (float) readline();
echo "Convet to (F: Farenheit, C: Celcius) : ";

$choice = readline();


switch ($choice) {
    case 'F':
        $result = $temparature * FACTOR + OFFSET;
        echo "Temparature is in Farenheit : $result";
        break;
    case 'C':
        $result = ($temparature - OFFSET) / FACTOR;
        echo "Temparature is in Celcius : $result";
        break;
    default:
        echo "Invalid Input";
        break;
}


