<?php 
    session_start();

    // Connect to server and select database
    $conn = new mysqli("localhost","root","","db1_gwalke01");

    // Update query
    $sql = "UPDATE test SET name = '$_POST[txtname]', 
            email = '$_POST[txtemail]',
            phone_number = '$_POST[txttelno]'
            WHERE ID = '$_SESSION[id]'";

    // Execute query
    $conn->query($sql);

    header('Location: wk6ex2.php');
    exit();
?>