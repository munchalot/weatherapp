<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Linking CSS file -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>

    <h1>Greetings from PHP!</h1>

    <?php
        // PHP loop to generate a list
        echo '<ul>';
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>Item $i</li>";
        }
        echo '</ul>';
    ?>

    <!-- Linking JavaScript file -->
    <script src="script.js"></script>

</body>
</html>