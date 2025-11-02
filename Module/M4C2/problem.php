<?php


// problem - 1

// function fun1(array $array, int $number): int
// {

//     $counter = 0;

//     foreach ($array as $key => $value) {

//         if ($value == $number) {
//             $counter += 1;
//         }
//     }

//     return $counter;
// }

// $result = fun1([1, 2, 2, 3, 4, 2, 2], 2);

// echo "Number 2 found $result times.";


// problem - 2

// function fun1(string $str) : string {

//     return strrev($str);

// }

// echo fun1("hello");

// problem - 3

// function fun3(int $number): bool
// {

//     if ($number <= 1) {
//         return false;
//     }

//     for ($i = 2; $i <= sqrt($number); $i++) {

//         if ($number % $i == 0) {
//             return false;
//         }
//     }

//     return true;
// }

// $input = 10;

// echo fun3($input) ? "$input is a Prime number." : "$input is not Prime number.";

// $file = file_put_contents("text.txt", "test \n", FILE_APPEND);

// echo file_get_contents('text.txt');


// problem - 4


// function fun4(string $str) : bool {

//     $revStr = strrev($str);

//     if ($str === $revStr) {
//         return true;
//     }

//     return false;

// }


// $input = "madam";

// echo fun4($input) ? "$input is a প্যালিনড্রোম string." : "$input is not প্যালিনড্রোম string.";


// problem -5


// function fun5(string $input) : int {

//     $counter = 0;
//     $input = strtolower($input);

//     $vowels = ['a', 'e', 'i', 'o', 'u'];

//     for ($i=0; $i < strlen($input); $i++) { 
//         if (in_array($input[$i], $vowels)) {
//             $counter += 1;
//         }
//     }

//     return $counter;

// }

// $result = fun5("banana");

// echo $result  ? "This string Vowels count $result" : "This string Vowels count $result";



// problem - 6


// function fun6(string $input): string
// {

//     $array = explode(" ", $input);

//     $ad = [];

//     foreach ($array as $key => $value) {
//         array_push($ad, strrev($value));
//     }

//     return implode(" ", $ad);
// }


// echo fun6("I am fine");


// problem -7


function fun7(string $str1, string $str2) : bool {
    
    if ($str1 === $str2) {
        return true;
    }

    return false;

}


$result = fun7("banana", "baNana");

echo $result  ? "Strings are equal (case insensitive)." : "Strings are NOT equal.";

