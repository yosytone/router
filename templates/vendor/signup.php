<?php

    session_start();
    
    
    require 'config/bd.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $stmt1 = $db->prepare("INSERT INTO logintab SET login = ?, pass = ?");
    $stmt1 -> execute([$login, $pass]);

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ./');

?>
