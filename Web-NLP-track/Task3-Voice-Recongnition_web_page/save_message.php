<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have set up a connection to the database
    $dbHost = 'localhost';
    $dbUser = 'your_database_username';
    $dbPass = 'your_database_password';
    $dbName = 'speech_recognition_db'; // Replace with your actual database name

    $connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Sanitize the message received from JavaScript to prevent SQL injection
    $message = $connection->real_escape_string($_POST['message']);

    // Insert the captured message into the database
    $sql = "INSERT INTO captured_messages (message) VALUES ('$message')";
    if ($connection->query($sql) === true) {
        echo "Message saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
?>
