
<?php
if(isset($_GET['location'])) {
    $location = $_GET['location'];

    echo "<h2>Weather Forecast for $location</h2>";
} else {
    echo "Location parameter not provided!";
}
?>
