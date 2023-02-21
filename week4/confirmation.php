<?php
   $price = $_POST['hdprice'];
   $qty = $_POST['hdqty'];
   $total = $price * $qty;
   
   echo "<h2> Your order qty is $_POST[hdqty] </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2></br>";
   echo "<h2> Your total price is $total </h2>";
?>
