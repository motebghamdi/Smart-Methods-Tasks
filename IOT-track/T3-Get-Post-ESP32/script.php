<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the temperature and humidity data from the POST request
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];

    // Connect to the MySQL database (replace the credentials with your settings)
    $servername = "localhost";
    $username = "moteb";
    $password = "1234";
    $dbname = "data_from_sensors";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the data into the database
    $sql = "INSERT INTO temp_and_humidity (temperature, humidity) VALUES ('$temperature', '$humidity')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully";
    } else {
        echo "Error saving data: " . $conn->error;
    }

    $conn->close();
}
?>

