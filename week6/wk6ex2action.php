<?php	

	// Connect to server and select database
    $conn = new mysqli("localhost","root","","db1_gwalke01");

	$sql = "SELECT * FROM test WHERE ID = '$_GET[id]' ";

	// Execute query
    $result = $conn->query($sql);

	$row = mysqli_fetch_assoc($result);
?>

<html>
<body>
<form action="" method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row["name"] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row["phone_number"]?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row["email"]?>" />
	</br>
	
	<input type=submit name=btnsubmit value="save"/>

</form>
</body>

