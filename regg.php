<?php
session_start();
$connect = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
	
$user_id = $_SESSION['user']['id'];
$res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = $user_id");
$user = mysqli_fetch_all($res);
$idd = 5;
$iddd = $user[0][0];
if ($idd > $iddd) {
    header('Location: for.php');
}else{
    header('Location: for1.php');
}

?>