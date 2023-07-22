<?php
// Ensure the request method is POST

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve direction and distance from the POST data
  $direction = $_POST['direction'];
  $distance = $_POST['distance'];

  // Database configuration
  $servername = 'localhost'; // Replace with your server name
  $username = 'moteb'; // Replace with your MySQL username
  $password = '1234'; // Replace with your MySQL password
  $dbname = 'manual_dir_control_panel_db'; // Replace with your database name

  // Create a new connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Prepare and execute the SQL INSERT statement
  $stmt = $conn->prepare('INSERT INTO arrow_actions (direction, distance) VALUES (?, ?)');
  $stmt->bind_param('si', $direction, $distance);
  $stmt->execute();

  // Close the statement and connection
  $stmt->close();
  $conn->close();
}
?>