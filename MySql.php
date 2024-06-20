<?php
// Database configuration
$hostname = 'localhost'; // Replace with your MySQL server hostname
$username = 'root'; // Replace with your MySQL username
$password = 'aerodynamics'; // Replace with your MySQL password
$database = 'test_query'; //    Replace with your database name

// Connect to the database
$conn = mysqli_connect($localhost, $root, $aerodynamics, $Parks_and_Recreation);
if (!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Retrieve student data from the database
$query = 'SELECT * FROM students';
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Database query error: ' . mysqli_error($conn));
}


$students = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>