<?php
    session_start();
    $connect = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
    
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "firstname" => $user['firstname'],
            "name" => $user['name'],
            "phone" => $user['phone'],
            "gmail" => $user['gmail']
        ];

        header('Location: profile.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: sign.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
