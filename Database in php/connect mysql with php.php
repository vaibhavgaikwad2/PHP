<?php

// Define database connection parameters
$host = "localhost"; // Host where the database is hosted, usually "localhost" for local server
$username = "root"; // Username to connect to MySQL, default is "root" for XAMPP/WAMP
$password = "Vaibhav@123456"; // Password to connect to MySQL, make sure it's correct
$database = "institute"; // Name of the database you want to connect to

// Create a new connection object using MySQLi (Object-Oriented)
$conn = new mysqli($host, $username, $password, $database);

// Check if connection failed
if ($conn->connect_error) {
    // If there's an error, terminate script and print error message
    die("some error" . $conn->connect_error); // Corrected: it was $conn->$connect_error, which is invalid
}

// If connection is successful, print confirmation
echo "connection is successful";
echo "<br>";

// Run SQL query to select all rows from 'student' table
// $conn->query() sends the SQL to MySQL
// ->fetch_all() retrieves all resulting rows into a PHP array
$result = $conn->query("SELECT * FROM student")->fetch_all();

// Print the entire result array (all student records)
print_r($result);

?>
