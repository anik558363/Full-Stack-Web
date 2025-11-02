<?php


function getEvenString(array $input) : Array{

    $result = [];

    foreach ($input as $key => $value) {
        if (strlen($value) % 2 == 0) {
            $result[] = $value;
        }
    }

    return $result;

}

$strings = ["apple", "banana", "kiwi", "mango", "tea"];
$evenLengthStrings = getEvenString($strings);

print_r($evenLengthStrings);


?>