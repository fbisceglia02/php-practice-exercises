<?php
    $rectL=20;
    $rectW=30;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle area calculator</title>
</head>

<body>
<header>
    <h1>Rectangle Area Calculator</h1> <!-- insert title here -->
    <h2>Task:</h2>
    <p>2. Calculate and print the area of a rectangle using variables for length and width.</p>
</header>

<main>
    <h2>Solution:</h2>
    <?php
    echo "<p>We are assuming that: </p>
    <p>Our rectangle has:</p>
    <p>lenght: " . $rectL . ";</p>
    <p>width: ". $rectW ."</p>";
    echo "So the area will be " . $area = $rectL * $rectW
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