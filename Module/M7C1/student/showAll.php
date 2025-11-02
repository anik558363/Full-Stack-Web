<?php

require_once "../db/conniption.php";

function showAllStudents()
{
    global $conn;

    $sqlQuery = $conn->prepare("SELECT * FROM `students`");

    if ($sqlQuery->execute()) {
        $result = $sqlQuery->get_result();

        if ($result->num_rows > 0) {
            echo "<h3>All Students</h3>";
            echo "<table border='1' cellpadding='5'>";
            echo "<tr>";
            // Table header
            while ($fieldInfo = $result->fetch_field()) {
                echo "<th>{$fieldInfo->name}</th>";
            }
            echo "</tr>";

            // Table rows
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>{$value}</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No students found.";
        }
    } else {
        echo "Error: " . $sqlQuery->error;
    }
}

// Example usage
showAllStudents();
