<html>
  <head><title>Select colour page</title></head>
    <body> 
      <?php 
      session_start();
      $_SESSION['selsize'] = $_POST['selsize'];
      ?>
      <form action="confirmation.php"  method="post">
	        Select the colour for the <?php echo $_SESSION["selqty"] ?> widgets you are ordering
   	      <select name="selcolour">
   	      <option>white</option>
	        <option>red</option>
	        <option>yellow</option>
	        <option>green</option>
	        <option>blue</option>
        </select>
        <br/><br/>	
        <!-- <input type="hidden" name="hdqty" value ="<?php echo $_POST["selqty"] ?>" /> 
        <input type="hidden" name="hdprice" value ="<?php echo $_POST["qtyprice"] ?>" />
        <input type="hidden" name="hdsize" value="<?php echo $_POST["selsize"] ?>" /> -->
        <input type="submit" value="Buy"/>
      </form>
    </body>
</html>	
