<?php


require_once "../db/conniption.php"; // Database connection include


function updateStudent(array $data)
{
    global $conn;

    // Step 1: Validation
    if (!studentDataValidation($data, $conn)) {
        return; // Validation fail
    }

    // Step 2: Prepare SQL Update Query
    $sqlQuery = $conn->prepare(
        "UPDATE `students`
         SET `name` = ?, 
             `email` = ?, 
             `bod` = ?, 
             `age` = ?, 
             `status` = ?
         WHERE id = ?"
    );

    // Step 3: Bind Parameters (s=string, i=integer)
    $sqlQuery->bind_param(
        "sssiii",
        $data['name'],   // name (string)
        $data['email'],  // email (string)
        $data['bod'],    // bod (string - YYYY-MM-DD)
        $data['age'],    // age (int)
        $data['status'], // status (int)
        $data['id']      // id (int)
    );

    // Step 4: Execute & Check Result
    if ($sqlQuery->execute()) {
        echo "✅ Student updated successfully!";
    } else {
        echo "Error: " . $sqlQuery->error;
    }
}

// ======================
// Validation Function
// ======================
function studentDataValidation(array $data, $conn): bool
{
    // Empty check
    if (empty($data['id'])) {
        echo "Give me a valid student ID";
        return false;
    }

    // Check if student exists
    $sqlQuery = $conn->prepare("SELECT id FROM `students` WHERE id = ?");
    $sqlQuery->bind_param("i", $data['id']);
    $sqlQuery->execute();
    $result = $sqlQuery->get_result();

    if (!$result->fetch_assoc()) {
        echo "User Not Found";
        return false;
    }

    return true; // Student exists
}

// ======================
// Example Data & Call Function
// ======================
$data = [
    'id' => 23,
    'name' => "Anik Mondal",
    'email' => "anik@example.com",
    'bod' => "2000-10-04",
    'age' => 24,
    'status' => 1
];

updateStudent($data);
