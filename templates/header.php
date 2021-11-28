<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Интернет Магазин</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>

        <header class="header">
            <div class="container">
                <div class="header_inner">
                    <div class="logo">BOOKS</div>
                    <nav class="nav">
                        <a class="nav_link" href="cart">
                            КОРЗИНА(
                            <span id="cart_count"> 

                                <?php 

                                if (isset($_SESSION['prod_list'])){
                                    echo count($_SESSION['prod_list']); 
                                }

                                ?>

                             </span>
                             )
                        </a>
                        <a class="nav_link" href="catalog">каталог</a>
                        <a class="nav_link" href="admin">админ</a>
                        <?php
                            if(!empty($_SESSION['login'])) {
                                print('<a class="nav_link" href="./?quit=1" title ="Выйти"> ВЫЙТИ</a>');
                                print('<a class="nav_link" href="account" title ="account"> МОЯ СТРАНИЦА</a>');
                            }
                            else
                                print('<a class="nav_link" href="login" title = "Войти">ВОЙТИ</a>');
                        ?>
                    </nav>
                </div>
            </div>
        </header>
