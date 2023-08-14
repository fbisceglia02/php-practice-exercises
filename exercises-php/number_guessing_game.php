<?php
    $title="Number guessing game"; //<!-- insert h1 title here -->
    $numberToGuess = rand(0,2)
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
    <p>2. Create a simple guessing game where the user has to guess a number between 1 and 100. Provide hints if the guess is too high or too low.</p>
</header>

<main>
    <h2>Solution:</h2>
    <p>This a number guessing game, the number range is from 0 to 100, make your shot</p>
    <form method="post">
        <label for="inputNumber">
            Your try:
        </label>
        <input type="text" name="inputNumber">
        <input type="submit" value="Try!">
    </form>
    <?php

    $inputNumber = $_POST['inputNumber'];

    if ($inputNumber>$numberToGuess){
        echo "Oh no, you lose! hint: your inserted number is to high!";
    } else if ($inputNumber==$numberToGuess){
        echo "Congrats, you win!";
    } else {
        echo "Oh no, you lose! hint: your inserted number is to low!";
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
