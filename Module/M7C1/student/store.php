<?php
require_once "../db/conniption.php";

function store(array $data)
{
    global $conn;
    studentDataValidation($data, $conn);

    // ✅ Date format convert
    if (!empty($data['bod'])) {
        $data['bod'] = date('Y-m-d', strtotime($data['bod']));
    }

    $sqlQuery = $conn->prepare(
        "INSERT INTO `students` (`name`, `email`, `bod`, `age`, `status`) 
         VALUES (?, ?, ?, ?, ?)"
    );

    $sqlQuery->bind_param(
        "sssii",
        $data['name'],
        $data['email'],
        $data['bod'],
        $data['age'],
        $data['status']
    );

    if ($sqlQuery->execute()) {
        echo "Student inserted successfully!";
    } else {
        echo "Error: " . $sqlQuery->error;
    }
}

function studentDataValidation(array $data, $conn)
{
    if (isset($data['name']) && empty($data['name'])) {
        echo "Name is Required";
        return false;
    }

    if (isset($data['email'])) {
        if (empty($data['email'])) {
            echo "Email is Required";
            return false;
        }

        $sqlQuery = $conn->prepare("SELECT * FROM `students` WHERE email = ?");
        $sqlQuery->bind_param("s", $data['email']);
        $sqlQuery->execute();
        $result = $sqlQuery->get_result();

        if ($result->fetch_assoc()) {
            die("Email already exists");
        }
    }
    return true;
}

// Example data
$data = [
    'name' => "anikadasdfdasd2",
    'email' => "anik2@gmasffdsfadfdasdfasdfdfaasdfilda.com",
    'bod' => "04-10-2000", // DD-MM-YYYY
    'age' => 24,
    'status' => 0,
];

store($data);
