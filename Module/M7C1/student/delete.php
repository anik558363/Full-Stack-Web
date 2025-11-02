<?php

require_once "../db/conniption.php";

function deleteStudent(int $id)
{
    global $conn;

    // Validate student existence
    if (!studentDataValidation($id, $conn)) {
        return; // Stop if validation fails
    }

    // Delete query
    $sqlQuery = $conn->prepare(
        "DELETE FROM `students` WHERE id = ?"
    );
    $sqlQuery->bind_param("i", $id);

    if ($sqlQuery->execute()) {
        echo "Student deleted successfully!";
    } else {
        echo "Error: " . $sqlQuery->error;
    }
}

function studentDataValidation(int $id, $conn): bool
{
    if (empty($id)) {
        echo "Give me a valid id";
        return false;
    }

    // Check if student exists
    $sqlQuery = $conn->prepare("SELECT id FROM `students` WHERE id = ?");
    $sqlQuery->bind_param("i", $id);
    $sqlQuery->execute();
    $result = $sqlQuery->get_result();

    if (!$result->fetch_assoc()) {
        echo "User Not Found";
        return false;
    }

    return true;
}

// Example usage
$data = 13;
deleteStudent($data);
