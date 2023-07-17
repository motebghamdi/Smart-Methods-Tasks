<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "moteb";
$password = "1234";
$dbname = "control_panel_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query to retrieve the latest actions
$sql = "SELECT action_name, action_timestamp FROM actions ORDER BY action_timestamp DESC LIMIT 10";
$result = $conn->query($sql);



// Fetch the result into an associative array
$actions = array();
while ($row = $result->fetch_assoc()) {
    $actions[] = $row;
}

if (!$result) {
    die("Query failed: " . $conn->error);
}

// Close the connection
$conn->close();

// Send the actions data as a JSON response
header('Content-Type: application/json');
echo json_encode($actions);
?>
