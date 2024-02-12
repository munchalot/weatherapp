
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Data</title>

    <!-- Linking CSS file -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Weather Data for New York:</h1>

    <?php
        // Connecting to the MariaDB database
        $servername = "your_server_name";
        $username = "your_username";
        $password = "your_password";
        $dbname = "weatherappdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to retrieve data for New York from the weather_data table
        $sql = "SELECT city, temperature FROM weather_data WHERE city = 'New York'";
        $result = $conn->query($sql);

        // Displaying the results
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p>City: " . $row["city"] . " - Temperature: " . $row["temperature"] . "°C</p>";
            }
        } else {
            echo "No weather data found for New York";
        }

        // Closing the database connection
        $conn->close();
    ?>

    <!-- Linking JavaScript file -->
    <script src="script.js"></script>

</body>
</html>