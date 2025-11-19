
<?php
$item = "pizza";
$price = 12.00; // use float, not string
$quantity = $_POST["quantity"];
$total = $price * $quantity;

echo "You have ordered {$quantity} {$item}(s)<br>";
echo "Your total is: \${$total}";
?>
