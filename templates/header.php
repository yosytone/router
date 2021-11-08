<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Интернет Магазин</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="./style/style.css">
</head>

<body>

<?php
    session_start();
  ?>

<div id="start">
    <div class="container-lg">
        <ul class="row">
            <h3 class="col-10" ><a href="/">bookHead</a></h3>
            <div class="menu col-1" ><a href="cart">корзина</a></div>
            <div class="menu col-1" >
            <?php
        if(!empty($_SESSION['login']))
            print('<a href="./?quit=1" title ="Выйти"> Выйти</a>');
        else
            print('<a href="login" title = "Войти">Войти</a>');
        ?>
                                                                </div>


        </ul>
    </div>
</div>
