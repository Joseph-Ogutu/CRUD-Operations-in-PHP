<?php
// Include the database connection file
require_once "config.php";

// Get the ID from the URL
$id = $_GET["id"];

// Prepare a SELECT query to retrieve the employee data
$sql = "SELECT * FROM employees WHERE id = ?";

// Prepare the statement
$stmt = mysqli_prepare($link, $sql);

// Bind the ID parameter
mysqli_stmt_bind_param($stmt, "i", $id);

// Execute the statement
mysqli_stmt_execute($stmt);

// Get the result
$result = mysqli_stmt_get_result($stmt);

// Fetch the data
$row = mysqli_fetch_array($result);

// Display the data
echo "<h2>Employee Details</h2>";
echo "<p>ID: " . $row["id"] . "</p>";
echo "<p>Name: " . $row["name"] . "</p>";
echo "<p>Address: " . $row["address"] . "</p>";
echo "<p>Salary: " . $row["salary"] . "</p>";

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($link);
?>