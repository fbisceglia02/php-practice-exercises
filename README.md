# PHP: Assign a variable to the top and read it in the HTML
In this code, we can see how we can assign a variable in PHP, we are doing that on the head of the code, with this:
```php
<?php
$x = 20;
?>
```

Then, we use the variable we assigned in the HTML, right here
```php
<p>Hello, the value of x is <?php echo $x ?></p>    
```

---
### Full preview
```php
<?php
$x = 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn php</title>
</head>
<body>
<h1>Learn PHP</h1>
<p>Hello, the value of x is <?php echo $x ?></p>    


</body>
</html>
```