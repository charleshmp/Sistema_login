<?php

    require_once('conn.php');
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = md5($_POST['password']);

    $sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
    $result = $conn->prepare($sql);
    $result->execulte(['email' => $email, 'password' => $password]);
    $user = $result->fetch();

    var_dump($user);


?>