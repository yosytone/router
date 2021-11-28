<?php

    session_start();
    if (!$_SESSION['uid']) {
        header('Location: signin');
    }

    require 'config/bd.php';

    $stmt = $db->prepare('SELECT * FROM orders WHERE uid = ?');
    $stmt->execute([$_SESSION['uid']]);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $new_id = $row['id_book'];
        $stmt2 = $db->prepare('SELECT * FROM book WHERE id_book=?');
        $stmt2->execute([$new_id]);
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
        print($row2['title']); 
        
    }

?>

