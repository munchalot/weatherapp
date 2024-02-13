<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="forecast">
        <?php
            if(isset($_GET['location'])) {
                $location = $_GET['location'];
                if ($location == 'NEW YORK' || 'New York' || 'new york') {
                    $location = 'New York, US';
                    $locationId = 5128581;
                }
                if ($location == 'TAMPA' || 'Tampa' || 'tampa') {
                    $location = 'Tampa, US';
                    $locationId = 4174757;
                }
                $apiKey = '0805460c1840efe0edb9e46fbad71ace'; 
                $url = "http://api.openweathermap.org/data/2.5/weather?id=$locationId&appid=$apiKey";
                
                // Fetch weather data from OpenWeatherMap API
                $weather_data = file_get_contents($url);
                $weather_info = json_decode($weather_data, true);

                // Check if location exists
                if ($weather_info && $weather_info['cod'] === 200) {
                    // Extract relevant weather details
                    $tempKelvin = $weather_info['main']['temp'];
                    $description = $weather_info['weather'][0]['description'];
                    $icon = $weather_info['weather'][0]['icon'];

                    // K to Celsius
                    $tempCelsius = $tempKelvin - 273.15;

                    // Display weather forecast
                    echo "<h2>Weather Forecast for $location</h2>";
                    echo "<p>Temperature: $tempCelsius &deg;C</p>";
                    echo "<p>Description: $description</p>";
                    echo "<img src='http://openweathermap.org/img/wn/$icon.png' alt='Weather Icon'>";
                } else {
                    // Display an error message if location is not found
                    echo "Error retrieving weather information for $location!";
                }
            } else {
                // Display a message if location parameter is not provided
                echo "Location parameter not provided!";
            }
        ?>
    </div>
</body>

</html>

