<?php

// $stringLine = "Hello I am Panda";

// $array = explode(" ", $stringLine);

// print_r($stringLine);


// $arrayLine = [
//     "Hello",
//     "I",
//     "am"
// ];


// print_r(implode(",", $arrayLine));


$text = "apple,banana;cherry|date";

$item = preg_split("/[,;|]/", $text);
print_r($item);