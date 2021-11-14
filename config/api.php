<?php 
session_start();

require 'bd.php';
require 'function.php';

if ( isset($_POST['prod_id']) ) {

    $current_added_course = getA($_POST['prod_id']);
    $current_cart_value = 0;

    if ( !isset($_SESSION['prod_list'])) {
        $_SESSION['prod_list'][] = $current_added_course;
        $current_cart_value = count($_SESSION['prod_list']);
    }

    $course_check = false;

    if ( isset($_SESSION['prod_list']) ) {
        foreach ($_SESSION['prod_list'] as $value) {
            if ( $value['id_book'] == $current_added_course['id_book'] ) {
                $course_check = true;
            }
        }
    

        if ( !$course_check ) {
            $_SESSION['prod_list'][] = $current_added_course;
            $current_cart_value = count($_SESSION['prod_list']);
        }
        $current_cart_value = count($_SESSION['prod_list']);
    }

    echo $current_cart_value;
    
}
?>