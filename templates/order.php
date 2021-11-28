<?php 
session_start();

require 'config/bd.php';

$price_order = 0;

?>

<form action="order_confirm" method="post">
    <ul>
		<?php foreach( $_SESSION['prod_list'] as $course ) : ?>

		    <li>
				<?php echo $course['title']; ?> 
			</li>

            <?php 

                $new_id = $course['id_book'];
                $stmt2 = $db->prepare('SELECT * FROM price WHERE id_book=?');
                $stmt2->execute([$new_id]);
                $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

                $price_order = $price_order + $row2['price']; 
            ?>

        

		<?php endforeach; ?>
    </ul>

    <div>
        Общая цена = 
        <?php print($price_order) ?>
        $
    </div>


    <button type="submit">ОПЛАТИТЬ</button>
</form>




