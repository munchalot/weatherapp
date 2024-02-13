<?php
if(isset($_GET['location'])) {
    $location = $_GET['location'];
    $apiKey = '0805460c1840efe0edb9e46fbad71ace'; 
    $url = "http://api.openweathermap.org/data/2.5/weather?id=$location&appid=$apiKey";
    
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
