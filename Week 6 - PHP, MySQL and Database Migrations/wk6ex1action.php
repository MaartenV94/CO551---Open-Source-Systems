<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql .= " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	// Connect to server and select database
	$conn = new mysqli('localhost', 'root','','db1_gwalke01');

	// Execute sql statement		
    $result = $conn->query($sql);

	$sql = "SELECT * from test";
	
	// Execute sql statement
	$result = $conn->query($sql);
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>
