
<?php
	require 'config/bd.php';


    $stmtCount = $db->prepare('SELECT * FROM articles');
    $stmtCount->execute();

   
?>



<div class="container-lg">
        <ul class="row">
            <div class="menu-catalog col-3" ></div>

            <div class="col-9 container-lg mx-auto" >
                <ul class="row">
                    
                    <?php
                        while($row = $stmtCount->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                        <div class="block col-3" >
                            <a href="single<?php print("?id="); print($row['ID']); ?>">
                                <img src="<?php print($row['img_path']); ?>" alt="">
                            </a>
                            <a href="cart<?php  print("?prod_id="); print($row['ID']);?>">
                                В КОРЗИНУ
                            </a>

                            <!-- Асинхронная корзина
                            <a class="product_link_id" data-id="<?php print($row['ID']);?>">
                                В КОРЗИНУ
                            </a>
                            -->

                        </div>

                    <?php
                        }
                    ?>


                </ul>

            </div>
        </ul>

    </div>
</div>