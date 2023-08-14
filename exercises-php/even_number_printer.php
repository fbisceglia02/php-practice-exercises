<?php
    $title="Even number printer"; //<!-- insert h1 title here -->
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
    <p>3. Use a loop to print even numbers from 2 to 20.</p>
</header>

<main>
    <h2>Solution:</h2>
    <p>Even numbers from 2 to 20</p>
    <?php
        for($i=1; $i<=20; $i++){
            if($i%2==0){
                echo "<p>".$i,"</p>";
            }
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

```