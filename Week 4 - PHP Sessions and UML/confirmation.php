<?php
session_start();
$qty = $_SESSION['selqty'];
$selsize = $_SESSION['selsize'];
$price = 0;

   switch ($selsize)
   {
      case "Small" : 
         $price = 15.75;
            break;
      case "Medium" : 
         $price = 16.75;
            break;
      case "Large" : 
         $price = 17.75;
            break;
      case "Extra Large" : 
         $price = 18.75;
            break;
      default : "No size selected";
   }
   $total = $qty * $price;

   echo "<h1>ORDER CONFIRMATION:</h1></br>";
   echo "<h2> Your order qty is: $_SESSION[selqty] </h2></br>";
   echo "<h2> The size you selected is: $_SESSION[selsize] </h2></br>";
   echo "<h2> and the selected colour is: $_POST[selcolour]</h2></br>";
   echo "<h2> Your total price is: £ $total </h2>";
?>
