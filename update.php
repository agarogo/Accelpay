<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<?php
        $connect = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
        $user_id = $_SESSION['user']['id'];
                            
        $res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = $user_id");
        $user = mysqli_fetch_all($res);
        
        
$id = ($user[0][0]);
$name = $_POST['name'];





mysqli_query($connect, "UPDATE `users` SET `name` = '$name' WHERE `id` = '$id'");
header('Location: pro.php');
?>