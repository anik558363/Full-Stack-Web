<?php


// echo "PHP FUNCTION";
// echo "<br>";


// function calculateSum($a, $b){
//     echo $a + $b;
// }


// function calculateSum($a, $b){
//     return $a + $b;
// }



// $result = calculateSum(a:10, b:20);
// $result2 = calculateSum(a:40, b:50);

// echo $result * $result2;


// type hinging

// function calculateSum(int $a, int $b): int|float {
//     return $a + $b;
// }

// echo calculateSum(a:20, b:88);

// variable scope

// $globalName = "anik";

// function greet(){

//     global $globalName;
//     echo "Hello $globalName" ;
// }

// greet();

// $globalName = "anik";

// function greet():void{

//     global $globalName;
//     echo "Hello $globalName" ;
// }





// greet();

// anonymous/callBack function


// $sum = function ($a, $b){
//     return $a + $b; 
// };


// echo $sum(11, 2);

// $upperCase = function($value){
//     return strtoupper($value);
// };


// echo $upperCase("anik");




// arraw function

// $sum = fn($a, $b) =>  $a + $b;

// echo $sum(11, 22);


// recursiveFunction


// function factorialByLoop($n)
// {

//     $result = 1;

//     for ($i = 2; $i <= $n; $i++) {
//         $result *= $i;
//     }

//     return $result;
// }


// echo factorialByLoop(n:5);


// function factorial($n){
//     if ($n == 0 || $n == 1) {
//        return 1;
//     }


//     return $n * factorial($n - 1);
// }

// echo factorial(5);


// function userLoggIn($userName = null)
// {

//     if ($userName === null) {
//         echo "Ennter valid username : ";

//         $userName = trim(fgets(stream: STDIN));
//     }

//     if ($userName !== "mobin") {
//         echo "invalid username ";
//         echo "\n";
//         echo "Ennter valid username : ";

//         $userName = trim(fgets(stream: STDIN));
//         userLoggIn($userName);
//         return;
//     }

//     echo "login successful";
// }



// userLoggIn($userName);


function userLoggIn($userName = null)
{
    if ($userName === null) {
        echo "Enter valid username: ";
        $userName = trim(fgets(STDIN));
    }

    if ($userName !== "mobin") {
        echo "Invalid username\n";
        userLoggIn(); 
        return;
    }

    echo "Login successful\n";
}

userLoggIn();

