<?php
$name = "Ferruccio";
$age = 20;
$isStudent = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable practice</title>
</head>

<body>
<header>
    <h1>Variable Practice exercise</h1>
    <h2>Task</h2>
    <p>1. Create variables to store your name, age, and whether you are a student. Print these values.</p>
</header>

<main>
    <h2>
        Solution:
    </h2>
    <p>My name is: <?php echo $name ?></p>
    <p>i'm: <?php echo $age ?> years old</p>
    <?php echo "am i a student? " . $isStudent ?> 
    
</main>


<footer>
    <h3>Back to index:</h3>
    <a href="../Index.php">
        <button>Go back</button>
    </a>
</footer>

</body>
</html>