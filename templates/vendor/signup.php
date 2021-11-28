<?php

    session_start();
    
    
    require 'config/bd.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $stmt1 = $db->prepare("INSERT INTO person SET login = ?, pass = ?, email = ?");
    $stmt1 -> execute([$login, $pass, $email]);

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ./');

?>
