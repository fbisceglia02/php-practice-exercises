<?php
$celsiusTemp = 40;
$farenheitTemp = ($celsiusTemp * 9/5) + 32

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converion</title>
</head>

<body>
<header>
    <h1>Temperature conversion</h1> <!-- insert title here -->
    <h2>Task:</h2>
    <p>3. Convert a temperature from Celsius to Fahrenheit using variables and appropriate formulas.</p>
</header>

<main>
    <h2>Solution:</h2>
    <?php
    echo "Celsius temp " . $celsiusTemp . " equals to " . $farenheitTemp . " Farenheit temp."
    ?>
    
</main>

<footer>
    <h3>Back to index:</h3>
    <a href="../Index.php">
        <button>Go back</button>
    </a>
</footer>


</body>
</html>


<!-- The formula to convert Celsius temperature to Fahrenheit temperature is:

°F = (°C × 9/5) + 32

Where:
- °F is the temperature in Fahrenheit
- °C is the temperature in Celsius

To convert a Celsius temperature to Fahrenheit, you multiply the Celsius temperature by 9/5 and then add 32 to the result. -->