<?php
session_start();


require 'config/bd.php';
require 'config/function.php';


if ( isset($_GET['delete_id']) && isset($_SESSION['prod_list']) ) {
	foreach ($_SESSION['prod_list'] as $key => $value) {
		if ( $value['ID'] == $_GET['delete_id'] ) {
			unset($_SESSION['prod_list'][$key]);
		}		
	}
}


if ( isset($_GET['prod_id']) && !empty($_GET['prod_id']) ) {

	$current_added_course = getA($_GET['prod_id']);

	// ...
	if ( !empty($current_added_course) ) {

		if ( !isset($_SESSION['prod_list'])) {
			$_SESSION['prod_list'][] = $current_added_course;
        }


		$course_check = false;

		if ( isset($_SESSION['prod_list']) ) {
			foreach ($_SESSION['prod_list'] as $value) {
				if ( $value['ID'] == $current_added_course['ID'] ) {
					$course_check = true;
				}
			}
		}


		if ( !$course_check ) {
			$_SESSION['prod_list'][] = $current_added_course;
		}

	} else {
		header("Location: 404.php");
	}
	
}

// var_dump($_SESSION);




?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="index.php">На главную</a>

	<h1>Корзина</h1>

	<?php if ( isset($_SESSION['prod_list']) && count($_SESSION['prod_list']) !=0 ) : ?>

        <?php print (count($_SESSION['prod_list'])); ?>
	
		<ul>
			<?php foreach( $_SESSION['prod_list'] as $course ) : ?>

				<li>
					<?php echo $course['title']; ?> | 
                    <?php echo $course['ID']; ?> |
					<a href="cart?delete_id=<?php echo $course['ID'];?>">Х</a>
				</li>

			<?php endforeach; ?>
		</ul>
	
	<?php else : ?>

		<p>
			Ваша корзина пуста
		</p>

	<?php endif; ?>


	<a href="index.php">Продолжить покупки</a>
	<br>
	<a href="order.php">Оформить заказ</a>
	
</body>
</html>