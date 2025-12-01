
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="post">
        <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="submit" name ="confirm" val="confirm">
    </form>
</body>
</html>
<?php
if(isset($_POST['confirm'])){
    $card = $_POST['credit_card'];
    echo "You have selected: " . $card;
}
?>