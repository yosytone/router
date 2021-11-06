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
else if ($route == 'cart'){
    require 'templates/cart.php';
}

else if ($route == 'cart'){
    require 'templates/cart.php';
}

else if ($route == 'register'){
    require 'templates/register.php';



}
else if ($route == 'signup'){
    require 'templates/vendor/signup.php';
}
else if ($route == 'signin'){
    require 'templates/vendor/signin.php';
}

session_start();
if (!empty($_GET['quit'])) {
    session_destroy();
    $_SESSION['login'] = '';
    header('Location: login');
}


require 'templates/footer.php';