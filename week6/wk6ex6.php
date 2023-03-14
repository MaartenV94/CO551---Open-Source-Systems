<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(25000,24) . " tax";
	html_footer();
?>

