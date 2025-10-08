<?php
$name = "bro";
$food = "pizza";
$email = "fake@gmail.com";
$pricee = 4.99;
$employed = true;
$online = false;
$quantity = 3;
$total= null;
echo $name;
echo "Hello{$name}<br>";
echo "i like {$food}<br>";
echo "My email is {$email}<br>";
echo "Your pizza is \${$pricee}<br>";
echo "Employed: {$employed}<br>";
echo "Online: {$online}<br>";
$total = $quantity * $pricee;
echo "Total is: {$total}$<br>";
?>