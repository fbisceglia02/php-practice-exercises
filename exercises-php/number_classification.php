<?php
    $title="Number Classification"; //<!-- insert h1 title here -->
    $number;
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
    <p>1. Write a program that checks if a number is positive, negative, or zero using if statements.</p>
</header>

<main>
    <h2>Solution:</h2>
    <form method="post">
        <label for="number">Insert a number</label>
        <input type="text" name="number" id="">
        <input type="submit" value="check">
    </form>

    <?php
        $number = $_POST['number'];

        if ($number > 0){
            echo "The number ". $number. " is positive";
        } else if($number == 0 ){
            echo "You inserted '". $number. "'";
        } else {
            echo "The number ". $number. " is negative";
        }
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
