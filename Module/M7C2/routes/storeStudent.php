<?php


require_once "../classes/Database.php";
require_once "../classes/Student.php";

header("Content-Type: application/json");

$db = new Database();

$student = new Student($db);

$data = [];



if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['message' => "Invalid request method"]);
    exit;
}


$data = [];
if (!isset($_POST['name'])) {
    echo json_encode(['message' => 'Name is required']);
    exit;
}

if (!isset($_POST['email'])) {
    echo json_encode(['message' => 'Email is required']);
    exit;
}

if ($student->isEmailExist($_POST['email'])) {
    echo json_encode(['message' => 'Email already exist']);
    exit;
}


$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'bod' => $_POST['bod'],
    'age' => $_POST['age'],
    'status' => $_POST['status']
];

echo $student->insertStudent($data);
