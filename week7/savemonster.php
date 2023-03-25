<?php

$link = mysqli_connect("localhost", "21424839", "mysqluser", "db5_21424839");

// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name']; 
$audio = $_FILES['monsteraudio']['tmp_name'];

// Get the file binary data
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
    
    $sql = "INSERT INTO monster";
    $sql .= "(name, image, audio) ";
    $sql .= "VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

    mysqli_query($link, $sql);

    header("Location: wk7ex1.html");
    mysqli_close();
?>
