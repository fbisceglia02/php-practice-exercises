
<?php
    $title="Shopping cart calculator"; //<!-- insert h1 title here -->
    $firstProductName="Pasta";
    $firstProductCost=2;
    $firstProductQuantity=4;
    $secondProductName="Eggs";
    $secondProductCost=3;
    $secondProductQuantity=2;
    $totalCart=($firstProductCost*$firstProductQuantity)+($secondProductCost*$secondProductQuantity)
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
    <p>1. Write code to calculate the total cost of items in a shopping cart with prices and quantities.</p>
</header>

<main>
    <h2>Solution:</h2>
    <p id="cartDesc">
        <?php
            echo "The first product is the " . $firstProductName;
            echo " Quantity: " . $firstProductQuantity;
            echo " Cost " . $firstProductCost . "$";
        ?>
        <?php
            echo "The second product is the " . $secondProductName;
            echo " Quantity: " . $secondProductQuantity;
            echo " Cost " . $secondProductCost . "$";
        ?>
        <hr>
    </p>
    <p id="total">
        <?php
            echo "The total of the cart amounts " . $totalCart . ".00$"
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
