<?php 
    session_start();

    // Connect to server and select database
    $conn = new mysqli("localhost","root","","db1_gwalke01");

    // Update query
    $sql = "UPDATE test SET name = '$_POST[txtname]', 
            phone_number = '$_POST[txttelno]', 
            email = '$_POST[txtemail]'
            WHERE ID = '$_SESSION[id]';";

    // Execute query
    $result = $conn->query($sql);

    //echo $sql;

    if ($result) (
        //echo "Saved Successfully!";
    )

    header('Location: wk6ex2.php');

?>