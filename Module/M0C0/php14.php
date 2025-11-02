<?php

// function sayHello($name) {
//     echo "Hello $name";
// }

// sayHello(name:"Panda");


// $sayHello =  function ($name) {
//     echo "Hello $name";
// };


// $sayHello("anik");


// $numbers = [1, 2, 3, 4, 5];


// $squaredNumbers = array_map(function($num){
//     return $num * $num;
// }, $numbers);


// print_r($squaredNumbers);



function sayHello($name){
    // echo "Hello $name";


        return function() use ($name){
            return "Hello $name";
        };

}

$save = sayHello("anik");

echo $save();


?>