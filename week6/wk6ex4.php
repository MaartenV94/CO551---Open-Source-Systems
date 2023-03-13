<?php 
    // Connect to server and select database
    $conn = new mysqli("localhost", "root", "", "db1_gwalke01");

    // Update query
    $sql = "DELETE FROM test WHERE 
            name = '$_POST[txtname]',
            phone_number = '$_POST[txttelno]',
            email = '$_POST[txtemail]',
            ID = '$_GET[id]'; ";

    //Execute query
    $result = $conn->query($sql);

    // Return to list
    header('Location: wk6ex2.php');
?>