<?php

require_once "../db/conniption.php";

function showStudent(int $id)
{
    global $conn;

    // Validate student existence
    if (!studentDataValidation($id, $conn)) {
        return; // Stop if validation fails
    }

    // Fetch query
    $sqlQuery = $conn->prepare(
        "SELECT * FROM `students` WHERE id = ?"
    );


    $sqlQuery->bind_param("i", $id);

    if ($sqlQuery->execute()) {
        $result = $sqlQuery->get_result();

        if ($row = $result->fetch_assoc()) {
            echo "<h3>Student Details</h3>";
            echo "<table border='1' cellpadding='5'>";
            foreach ($row as $key => $value) {
                echo "<tr><th>{$key}</th><td>{$value}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No student found.";
        }
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
$data = 23;
showStudent($data);
