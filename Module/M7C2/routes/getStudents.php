<?php


require_once "../classes/Database.php";
require_once "../classes/Student.php";

header("Content-Type: application/json");

$db = new Database();

$student = new Student($db);


echo $student->getStudents();
