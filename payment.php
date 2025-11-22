<?php
 $hours = 50;
 $rate = 15;
 $weekly_pay = null;

 if($hours <= 0 ){
   $weekly_pay= 10;
   
 }
 elseif($hours >= 40){
     $weekly_pay = $hours * $rate;
 }
 else{
    echo"nothing";
 }
 echo "Your weekly pay is: \${$weekly_pay}" ;
?>