<?php

    header("Content-type: image/jpeg");

    $conn = mysqli_connect("localhost","21424839","mysqluser","db5_21424839");

    $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	
    $result = mysqli_query($sql, $conn);
    $row = mysqli_fetch_array($result);
    
    $audio = $row["audio"];

    echo $audio;
?>
