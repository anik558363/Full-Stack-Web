<?php

session_start();



$_SESSION["name"] = "anik";

unset($_SESSION["name"]);



echo $_SESSION["name"];





?>