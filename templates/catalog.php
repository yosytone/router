
<?php
	require 'config/bd.php';


    $stmt = $db->prepare('SELECT * FROM book');
    $stmt->execute();


   
?>


        <div class="catalog">
            <div class="container">
                
                <div class="catalog_nav">
                    <a class="catalog_nav_link" href="#">All</a>
                    <a class="catalog_nav_link" href="#">Наука</a>
                    <a class="catalog_nav_link" href="#">Психология</a>
                    <a class="catalog_nav_link" href="#">Фантастика</a>
                    <a class="catalog_nav_link" href="#">Прочее>></a>
                </div>

                <div class="good">

                <?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                    <div class="good_col">
                        <div class="good_item">
                            <div class="filters__img">
                                <a href="single<?php print("?id="); print($row['id_book']); ?>"><img class="good_image" src="<?php print($row['img_path']); ?>" alt=""></a>
                            </div>
                            <div class="good_content">
                                <div class="good_price">
                                    <?php
                                        $new_id = $row['id_book'];
                                        $stmt2 = $db->prepare('SELECT * FROM price WHERE id_book=?');
                                        $stmt2->execute([$new_id]);
                                        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                                        print($row2['price']); 

                                    ?>
                                </div>
                                <div class="good_title">
                                    <?php print($row['title']); ?>
                                </div>

                                <?php
                                    $new_id = $row['id_author'];
                                    $stmt3 = $db->prepare('SELECT * FROM author WHERE id_author=?');
                                    $stmt3->execute([$new_id]);

                                    $row3 = $stmt3->fetch(PDO::FETCH_ASSOC); 
                                ?>

                                <div class="good_author">
                                    <?php print($row3['first_name']); print($row3['last_name']); ?>
                                </div>


                                <?php
                                    $new_id = $row['id_genre'];
                                    $stmt4 = $db->prepare('SELECT * FROM genre WHERE id_genre=?');
                                    $stmt4->execute([$new_id]);

                                    $row4 = $stmt4->fetch(PDO::FETCH_ASSOC); 
                                ?>

                                <div class="good_genre">
                                    <?php print($row4['name_genre']); ?>
                                </div>


                                <div class="good_btn">
                                    <a class="product_link_id btn" data-id="<?php print($row['id_book']);?>">В КОРЗИНУ
                                    </a>
                                </div>
                            </div>  
                        </div>
                    </div>

                    <?php
                        }
                    ?>


                </div>

            </div>
        </div>

        <!--load more-->