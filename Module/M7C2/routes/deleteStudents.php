<?php

require_once "../classes/Database.php";
require_once "../classes/Student.php";

header("Content-Type: application/json");

$db = new Database();
$student = new Student($db);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['message' => "Invalid request method"]);
    exit;
}

// Validate ID
if (empty($_POST['id'])) {
    echo json_encode(['message' => "Student ID is required"]);
    exit;
}

$id = (int)$_POST['id'];

// Delete student
echo $student->deleteStudent($id);
