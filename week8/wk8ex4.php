<?php     
        $conn = mysqli_connect("localhost","21424839","mysqluser","db5_21424839");
       $sql = "select * from lotto;";
        $result = mysqli_query($sql);

        echo "<form action='$_SESSION[PHP_SELF]' method='post' >";
        echo "<br/>Select the lottery week ";
        echo "<select name='selweek' >";
        while($row = mysqli_fetch_array($result)) {
  	  echo "<option value='$row[wk]'>$row[wk]</option>";
        }
        echo "</select><br/>";
        echo "<input type='submit' value='Select' />";
        echo "</form>";
?>
