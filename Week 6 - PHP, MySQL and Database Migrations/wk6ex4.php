<?php 
    session_start();

    // Connect to server and select database
    $conn = new mysqli("localhost", "root", "", "db1_gwalke01");

    // Update query
    $sql = "DELETE FROM test WHERE 
            ID = '$_SESSION[id]'";

    //Execute query
    $conn->query($sql);

    // Return to list
    header('Location: wk6ex2.php');
    exit();
?>