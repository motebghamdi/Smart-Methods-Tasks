<?php
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

// Retrieve the latest actions from the database
$sql = 'SELECT id, direction, distance FROM arrow_actions ORDER BY id DESC LIMIT 5'; // Change the LIMIT value to fetch the desired number of actions
$result = $conn->query($sql);

// Fetch data and store it in an array
$actions = array();
while ($row = $result->fetch_assoc()) {
  $actions[] = $row;
}

// Close the database connection
$conn->close();

// Send the data as a JSON response
header('Content-Type: application/json');
echo json_encode($actions);
?>
