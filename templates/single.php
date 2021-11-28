<?php
  require 'config/bd.php';
  require 'config/function.php';

  
  $state = getA($_GET["id"]);
  $title = $state["title"];
  $about = $state["about"];



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
              
              тогда текст который будет выходить за пределы div показываться не будет, а иначе "Текст без пробелов не переносится, это такое правило."
              тогда текст который будет выходить за пределы div показываться не будет, а иначе "Текст без пробелов не переносится, это такое правило."
              
        
          </div>
        </div>
      </div>


    </div>
  </div> 
</div>   