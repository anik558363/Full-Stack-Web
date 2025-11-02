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


if (!isset($_POST['name'])) {
    echo json_encode(['message' => 'Name is required']);
    exit;
}

if (!isset($_POST['email'])) {
    echo json_encode(['message' => 'Email is required']);
    exit;
}


if (empty($_POST['id'])) {
    echo json_encode(['message' => "Student ID is required"]);
    exit;
}


if ($student->isEmailExist($_POST['email'])) {
    echo json_encode(['message' => 'Email already exist']);
    exit;
}





// Prepare data
$data = [
    'id' => (int)$_POST['id'],
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'dob' => $_POST['dob'] ?? null,   // use dob, not bod
    'age' => $_POST['age'] ?? null,
    'status' => $_POST['status'] ?? 1
];

// Call the class method
echo $student->editStudent($data);
