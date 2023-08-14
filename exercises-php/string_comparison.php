
<?php
    $title="String comparision"; //<!-- insert h1 title here -->
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
    <p>3. Compare two strings and check if they are equal using the appropriate operator</p>
</header>

<main>
    <h2>Solution:</h2>
    <hr>
    <h4>This form compares accepts string variables</h1>
    <form method="POST">
        <input type="text" name="firstString">
        <input type="text" name="secondString">
        <input type="submit">
    </form>
    <p>
        <?php
            $firstString = $_POST['firstString'];
            $secondString = $_POST['secondString'];
            if($firstString == $secondString){
                echo "The two inserted strings are equal";
            } else{
                echo "The two inserted strings are not equal";
            }
        ?>
    </p>
    
</main>

<footer>
    <h3>Back to index:</h3>
    <a href="../Index.php">
        <button>Go back</button>
    </a>
</footer>


</body>
</html>

