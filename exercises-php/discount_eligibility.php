
<?php
    $title="Discount eligibility"; //<!-- insert h1 title here -->
    $userMembershipStatus;
    $userAge;
    $basePrice
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
    <p>4. Use logical operators to determine if a user is eligible for a discount based on their age and membership status.</p>
</header>

<main>
    <h2>Solution:</h2>
    <p>Users with more than 18 years pay the 100%, while have 15% discount</p>
    <p>If an user has a gold membership, he gets a 20% more discount</p>
    <hr>
    <h4>User details</h4>
    <form method='POST'>
        <label for="userAge">User age</label>
        <input type="text" name="userAge">
        <label for="userMembershipStatus">User membership</label>
        <select name="userMembershipStatus">
            <option value="normal">Normal</option>
            <option value="gold">Gold</option>
        </select>
        <input type="submit" value="Calculate">
    </form>
    <?php
        $userAge = $_POST['userAge'];
        echo $userAge;
        $userMembershipStatus = $_POST['userMembershipStatus'];
        echo " " . $userMembershipStatus;
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

