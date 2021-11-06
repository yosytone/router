<?php
	
		try{
			require 'config/bd.php';;
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			print $e->getMessage();
		}

		$title = $_POST['title'];
		$pictmp = $_FILES['pics']['tmp_name'];
		$picname = $_FILES['pics']['name'];
		$path = "uploads/";
		$filedir = $path.$picname;		
		
		$data = $db->prepare("INSERT INTO articles (title, img_path) VALUES(:title, :img_path)");
		$data->bindParam(":title", $title, PDO::PARAM_STR);
		$data->bindParam(":img_path", $filedir, PDO::PARAM_STR);
		$data->execute();
		move_uploaded_file($pictmp, $filedir);

?>



