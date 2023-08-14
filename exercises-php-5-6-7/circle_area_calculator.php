<?php
    $title="Circle area calculator"; //<!-- insert h1 title here -->
    function circleArea($radius){
        $pi = 3.14;
        $circleArea = $pi * ($radius * $radius);
        return $circleArea;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
</head>

<body>
<header>
    <h1><?php echo $title?></h1> 
    <h2>Task:</h2>
    <p>1. Create a function that calculates the area of a circle given its radius.</p>
</header>

<main>
    <h2>Solution:</h2>
    <p>Form for circle area calculation</p>
    <form action="" method="post">
        <label for="radius">Insert circles radius:</label>
        <input type="text" name="radius" id="">
        <input type="submit" value="Calculate area">
    </form>
    <?php
    $radius = $_POST['radius'];
    $circleArea = circleArea($radius);
    echo "The circle with radius {$radius} area is {$circleArea}"
    ?>
    
</main>

<footer>
    <h3>Back to index_0:</h3>
    <a href="./index_0.php">
        <button>Go back</button>
    </a>
</footer>


</body>
</html>
