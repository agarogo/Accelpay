<?php
	$connect = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
	$number = mysql_query("SELECT * FROM `users` SET 'Id' = 1"");
	echo $number;
?>