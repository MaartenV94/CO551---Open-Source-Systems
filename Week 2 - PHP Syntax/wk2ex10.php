<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
?>
<html>
<head>
<title>Data in table</title>
</head>

<body>  
<table border="1" align="center">
<tr><th>Index</th><th>Subject</th></tr>

<?php

for($count = 0;$count < 3; $count++)  
    {   
      $c = "year " . ($count + 1);
    echo "<tr><td>$c</td><td>$mymarks[$c]</td></tr>";
    }  
?>

</table>
<center>
<?php 
    echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>
</center>
</body>
</html>