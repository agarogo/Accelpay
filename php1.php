<?php
	$connect = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
	$number = mysqli_query($connect, "UPDATE `users` SET `number`=`number`-`nimber` WHERE `Id`=1");
	$number = mysqli_query($connect, "UPDATE `users` SET `number`=`number`+`nimber` WHERE `Id`=2");
    header('Location: table.php');
?>
