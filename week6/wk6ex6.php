<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(2500,20,400) . " tax";
	html_footer();
?>

