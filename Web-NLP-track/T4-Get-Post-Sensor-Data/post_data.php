<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Replace these values with your actual database credentials
$servername = "localhost";
$username = "moteb";
$password = "1234";
$dbname = "data_from_sensors";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST data exists
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get temperature and humidity data from POST request
    $temperature = $_POST["temperature"];
    $humidity = $_POST["humidity"];

    // Insert data into the database
    $sql = "INSERT INTO temp_and_humidity (temperature, humidity) VALUES ('$temperature', '$humidity')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
