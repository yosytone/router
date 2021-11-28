
<?php

    session_start();
    if (!$_SESSION['uid']) {
        header('Location: signin');
    }


?>



    <?php foreach( $_SESSION['prod_list'] as $course ) : ?>

        <?php 

            $today = $today = date("Y-m-d");

            $db = new PDO('mysql:host=localhost;dbname=base', "root", "", array(PDO::ATTR_PERSISTENT => true));
   
            $sql = "INSERT INTO orders (uid, id_book, order_date) VALUES (?,?,?)";
            $db->prepare($sql)->execute([$_SESSION['uid'], $course['id_book'], $today]);


        ?>

    <?php endforeach; ?>

    

