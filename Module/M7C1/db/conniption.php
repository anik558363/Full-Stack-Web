<?php


$localhost = "localhost";
$username = "root";
$password = "";
$database = "student";



try {
  $conn = new mysqli($localhost, $username, $password, $database);
} catch (Exception $e) {
  echo $e->getMessage();
}


// $conn = new mysqli($localhost, $username, $password, $database);


// if ($conn->connect_error) {
//     die($conn->connect_error);
// }


// echo "Connoted";
