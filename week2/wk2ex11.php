<?php 
    $mymarks["CO451"] = 60;
    $mymarks["CO435"] = 65;
    $mymarks["CO445"] = 70;
    $mymarks["CO476"] = 75;
    $mymarks["CO432"] = 80;
    $mymarks["CO412"] = 85;

    
    $total = $total + $mymarks[$index];
    
    $average = $total /  6;   

foreach ($mymarks as $index => $value)
{
    echo "For the module $index my final mark was $value points. <br/>";
}

$total = 0;

foreach ($mymarks as $index => $value)
{
 $total = $total + $mymarks[$index];
}

    $average = $total /  6; 
    echo "</br> My average mark is $average ";
 
?>

