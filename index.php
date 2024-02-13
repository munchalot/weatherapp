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
    <div class="container">
        <div class="searchbox">
            <img src="icon_location.png" alt="Location Icon" width="46" height="48">
            <!-- Change the action to forecast.php -->
            <form action="forecast_page.php" method="GET">
                <input type="text" name="location" placeholder="Enter your Location">
                <button type="submit"><img src="icon_search.png" alt="Search Icon" width="35.49" height="34.69"></button>
            </form>
        </div>
    </div>
</body>

</html>
