<?php

const USERNAME = "admin";
const PASSWORD = 123;


echo "Enter Username : ";
$Username = readline();


echo "Enter Password : ";
$Password =  (int) readline();


if (empty($Username) || empty($Password)) {
    echo "Username Or Password is required";
} else {
   
    if ($Username === USERNAME && $Password === PASSWORD) {
        echo "Login Succesfull";
    } else {
       echo "Invaild Username Or Password";
    }
    


}



?>