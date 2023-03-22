<?php

$conn = mysqli_connect("localhost", "21424839", "mysqluser", "db5_21424839");

$sql = "select id from monster;";

$result = mysqli_query($sql, $conn);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

mysqli_close();
?>
