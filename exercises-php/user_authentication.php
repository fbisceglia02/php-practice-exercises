<?php
$isLoggedIn = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User authentication</title> <!-- Insert page title here -->
</head>

<body>
<header>
    <h1>User authentication</h1> <!-- insert h1 title here -->
    <h2>Task:</h2>
    <p>4. Store a boolean value indicating whether a user is logged in. Based on this value, display a message like "Welcome" or "Please log in."</p>
</header>

<main>
    <h2>Solution:</h2>
    <?php
    if ($isLoggedIn){
        echo "The user has successfully logged in!";
    } else {
        echo "Login failed";
    };
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
