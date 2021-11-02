<?php 
$route = $_GET['route'];

require 'templates/header.php';

if ($route == ''){
    require 'templates/main.php';
}
else if ($route == 'login'){
    require 'templates/login.php';
}

require 'templates/footer.php';