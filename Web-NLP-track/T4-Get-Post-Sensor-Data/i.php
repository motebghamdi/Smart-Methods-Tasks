<?php
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

// Retrieve the temperature and humidity data from the database
$sql = "SELECT * FROM temp_and_humidity";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Temperature and Humidity Data</title>
</head>
<body>
    <h1>Temperature and Humidity Data</h1>
    <table>
        <tr>
            <th>Time</th>
            <th>Temperature (°C)</th>
            <th>Humidity (%)</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["timestamp"] . "</td>";
                echo "<td>" . $row["temperature"] . "</td>";
                echo "<td>" . $row["humidity"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>

