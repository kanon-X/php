<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radius.php" method = "post">
        <label>radius:</label>
        <input type = "text" name = "radius">
        <input type = "submit" value = "calculate">
    </form>
</body>
</html>
<?php
$radius = $_POST['radius'];
$circumference = 2 * pi() * $radius;
echo"circumference = {$circumference}cm <br>";
?>