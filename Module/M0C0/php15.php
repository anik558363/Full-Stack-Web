<?php



// CallbackFunction

// function sayHello($name)
// {
//     return "Hello $name <br>";
// }


// function greetAll(callable $callbackFunction, array $names)
// {

//     $results = [];

//     foreach ($names as $key => $name) {
//        $results [] = $callbackFunction($name . "add");
//     }

//     return $results;

// }


// $allGreetings = greetAll('sayHello', ['Panda', 'Fox', 'Cat']);


// var_dump($allGreetings);






// Recursion



// function factorial($n){
   
//     if ($n <= 0) {
//         return 1;
//     }

//     return $n * factorial($n - 1);

// }



// echo factorial(3);



// callback
// function hello($name) {

//     echo "Hello $name <br>";

// }


// function allGrate(callable $callbackFun, array $numS) {

//     foreach ($numS as $key => $value) {
//         $results [] = $callbackFun($value * 2);
//     }

//     return $results;

// }


// $dd = allGrate('hello', [11, 2]);



// Recursion



function r($a) {
    

    if ($a <= 0) {
        return 1;
    }


    return $a = $a * r($a - 1);



}


echo r(6);