<?php
  if ($_POST["txtage"] < 21) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }
?>
<?php
    if ($_POST["txtgender"] == "male")
    {
        echo "You are a male<br/>";
    }
    else 
    {
        echo "You are female<br/>";
    }
?>