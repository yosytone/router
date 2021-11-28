<?php 

require 'config/bd.php';

$stmt = $db->prepare('SELECT * FROM genre');
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC); 

$stmt2 = $db->prepare('SELECT * FROM author');
$stmt2->execute();
?>

<div class="div-art">
	<form method="post" id="formIMG" class="form-art" enctype="multipart/form-data">
		<div class="art-fields">
			<p><input type="text" placeholder="Заголовок статьи" class="insrt-field title" id="title" name="title"></p>
			<p><textarea placeholder="Текст статьи" class="insrt-field text" id="text" name="text"></textarea></p>

			<p><input type="text" placeholder="год" class="insrt-field years" id="years" name="years"></p>

			<p>Жанр</p>
    			<select name="genres" >
				<?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    
            			print('<option value="'.$row['id_genre'].'">'.$row['name_genre'].'</option>');
					}
					?>
    			</select>

			<p>Автор</p>
    			<select name="authors" >
				<?php
                        while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                    
            			print('<option value="'.$row2['id_author'].'">'.$row2['fio'].'</option>');
					}
					?>
    			</select>

				<p><input type="number" placeholder="цена" step="1" class="insrt-field text" name="prices"></p>


			<p>Прикрепить картинку <input type="file" id="pics" name="pics" class="insrt-field pics"></p>
			<p>Прикрепить файл <input type="file" id="bookf" name="bookf" class="insrt-field bookf"></p>
			<p><input type="submit" value="Создать" name="send" class="insrt-field send"></p>
		</div>
	</form>
</div>