<?php 
session_start();
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

else if ($route == 'order'){
    require 'templates/order.php';
}

else if ($route == 'account'){
    require 'templates/account.php';
}


else if ($route == 'register'){
    require 'templates/register.php';
}

else if ($route == 'single'){
    require 'templates/single.php';
}

else if ($route == 'signup'){
    require 'templates/vendor/signup.php';
}
else if ($route == 'signin'){
    require 'templates/vendor/signin.php';
}
else if ($route == 'order_confirm'){
    require 'templates/vendor/order_confirm.php';
}


else if ($route == 'api'){
    require 'config/api.php';
}


if (!empty($_GET['quit'])) {
    session_destroy();
    $_SESSION['login'] = '';
    $_SESSION['uid'] = '';
    header('Location: login');
}


require 'templates/footer.php';