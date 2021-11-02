<?php 
$route = $_GET['route'];

require 'templates/header.php';

if ($route == ''){
    require 'templates/main.php';
}
else if ($route == 'login'){
    require 'templates/login.php';
}
else if ($route == 'catalog'){
    require 'templates/catalog.php';
}
else if ($route == 'admin'){
    require 'templates/admin.php';
}

require 'templates/footer.php';