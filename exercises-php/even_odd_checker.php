<?php
    $title="Even Odd checker"; //<!-- insert h1 title here -->
    $inputNumber=21;
    $isEven=$inputNumber%2==0?true:false;
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
    <p>2. Create a program that determines if a given number is even or odd using the modulo operator.</p>
</header>

<main>
    <h2>Solution:</h2>
    <?php 
    echo "The input number is ";
    echo $isEven?"Even":"Odd";
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
