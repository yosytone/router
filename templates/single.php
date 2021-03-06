<?php
  require 'config/bd.php'; //подключаем бд
  require 'config/function.php'; //подключаем файл с функциями

  $state = getA($_GET["id"]); //функция возвращает все атрибуты из таблицы 
  $title = $state["title"]; //присваивается название товара
  $about = $state["about"]; //присваивает описание товара
?>
<div class="single">
  <div class="container">
    <div class="singles">

      <div class="single_col1">
        <div class="single_item">
        
          <div class="filters_img1">
            <img class="single_img" src="<?php print($state['img_path']); ?>" alt="">
          </div>

        </div>
      </div>

      <div class="single_col2">
        <div class="single_item">

          <div class="single_title">
            <?php 
              $new_id = $_GET["id"];
              $stmt3 = $db->prepare('SELECT * FROM author WHERE id_author=?');
              $stmt3->execute([$new_id]);
              $row3 = $stmt3->fetch(PDO::FETCH_ASSOC); 

              print($row3['fio']);
              print ("-");
              print ($title);
            ?>
          </div>

          <div class="single_about">
            <?php 
              print ($about);
            ?>
          </div>

          <div class="single_btn">
            <a class="product_link_id btn" data-id="<?php print($row['id_book']);?>">В КОРЗИНУ
            </a>
          </div>

        </div>
      </div>


    </div>


  </div> 
</div>   