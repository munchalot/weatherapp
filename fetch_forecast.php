<?php
if(isset($_GET['location'])) {
    $location = urlencode($_GET['location']);
    $apiKey = '0805460c1840efe0edb9e46fbad71ace'; 
    $url = "http://api.openweathermap.org/data/2.5/weather?id=$location&appid=$apiKey";
    
    // Fetch weather data from OpenWeatherMap API
    $weather_data = file_get_contents($url);
    $weather_info = json_decode($weather_data, true);

    // Check if location exists
    if ($weather_info && $weather_info['cod'] === 200) {
        // Redirect to forecast page with parameters
        header("Location: forecast_page.php?location=$location");
        exit();
    } else {
        // Redirect back to index.php if location is not found
        header("Location: index.php?error=1");
        exit();
    }
} else {
    // Redirect back to index.php if location is not provided
    header("Location: index.php?error=2");
    exit();
}
?>
