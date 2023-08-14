<?php
    $title="Prime number checker"; //<!-- insert h1 title here -->
    
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
    
        // Check for divisibility from 2 to the square root of the number
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
    
        return true;
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
    <p></p>
</header>

<main>
    <h2>Solution:</h2>
    <p>This form will determine if a number is prime or not</p>
    <form method="post">
        <label for="num">Insert a number</label>
        <input type="text" name="num" id="">
        <input type="submit" value="Check">
    </form>
    <?php
        $num = $_POST['num'];

        if (isPrime($num)){
            echo "the number is prime";
        } else {
            echo "the number is not prime";
        }
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

```