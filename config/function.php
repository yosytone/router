<?php
    
    function getA ($id_a) {

        
        $db = new PDO('mysql:host=localhost;dbname=base', "root", "", array(PDO::ATTR_PERSISTENT => true));
        $stmt = $db->prepare('SELECT * FROM book WHERE id_book = ?');
        $stmt->execute([$id_a]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($row);
    }
?>