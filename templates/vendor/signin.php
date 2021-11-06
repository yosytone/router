<?php

    session_start();

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    require 'config/bd.php';

    $stmt1 = $db->prepare('SELECT * FROM logintab WHERE login = ?');
    $stmt1->execute([$_POST['login']]);
    $row = $stmt1->fetch(PDO::FETCH_ASSOC);


    if (!$row) {
        header('Location: login');
        $_SESSION['message'] = 'Не верный логин или пароль';
        exit();
    }


    if ($row['pass'] != $pass) {
        header('Location: login');
        $_SESSION['message'] = 'Не верный логин или пароль';
        exit();
    }

    $_SESSION['login'] =  $row['login'];
    // Записываем ID пользователя.
    $_SESSION['uid'] = $row['UID'];


    // Делаем перенаправление.
    header('Location: ./');
    ?>