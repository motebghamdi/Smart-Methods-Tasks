<?php
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

// Get the action from the request body
$data = json_decode(file_get_contents('php://input'), true);
$action = $data['action'];

// Prepare and execute the SQL query to insert the action into the database
$stmt = $conn->prepare("INSERT INTO actions (action_name) VALUES (?)");
$stmt->bind_param("s", $action);
$stmt->execute();
$stmt->close();

// Close the connection
$conn->close();

// Send a response back to the client
http_response_code(200);
?>
