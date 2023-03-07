<?php	

	// Connect to server and select database
    $conn = new mysqli('localhost', 'root','','db1_gwalke01');

	$sql = "SELECT * from test";

	// Execute sql statement
    $result = $conn->query($sql);
	
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
    echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name] $row[ID]</a></br>";  	
}
?>
</body>
</html>
