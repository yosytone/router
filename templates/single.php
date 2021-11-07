<?php
  require 'config/bd.php';
  require 'config/function.php';

  
  $state = getA($_GET["id"]);
  $title = $state["title"];

?>

<nav class="container-lg mx-auto">
    <ul class="row">
      <ol class="col-1" ><a href="catalog">Каталог</a></ol>
      <ol class="col-1" ><a href="admin">админ</a></ol>
      <ol class="col-6" ></ol>
    </ul>
  </nav>

<div class="container-lg mx-auto" id="search1">

    <h1>
    <?php 
        print ($title);
        print ($_GET["id"]);
    ?>
    </h1>
      <div class="block col-3" >
          <img src="<?php print($state['img_path']); ?>" alt="">
          </a>
      </div>

</div>  