<?php
	
		try{
			require 'config/bd.php';;
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			print $e->getMessage();
		}

		$title = $_POST['title'];
		$about = $_POST['text'];

		$id_genre = $_POST['genres'];
		$id_author = $_POST['authors'];
		$year_book = "2000";

		$pictmp = $_FILES['pics']['tmp_name'];
		$picname = $_FILES['pics']['name'];
		$path = "uploads/";
		$filedir = $path.$picname;	

		$booktmp = $_FILES['bookf']['tmp_name'];
		$bookname = $_FILES['bookf']['name'];
		$path = "uploads/";
		$filedir_book = $path.$bookname;	
		
		$data = $db->prepare("INSERT INTO book (title, img_path, book_path, about, id_genre, id_author, year_book) VALUES(:title, :img_path, :book_path, :about, :id_genre, :id_author, :year_book)");
		$data->bindParam(":title", $title, PDO::PARAM_STR);
		$data->bindParam(":img_path", $filedir, PDO::PARAM_STR);
		$data->bindParam(":about", $about, PDO::PARAM_STR);
		$data->bindParam(":book_path", $filedir_book, PDO::PARAM_STR);

		$data->bindParam(":id_genre", $id_genre, PDO::PARAM_STR);
		$data->bindParam(":id_author", $id_author, PDO::PARAM_STR);
		$data->bindParam(":year_book", $year_book, PDO::PARAM_STR);

		$data->execute();
		move_uploaded_file($pictmp, $filedir);
		move_uploaded_file($booktmp, $filedir_book);

		$stmt2 = $db->prepare("INSERT INTO price SET id_book = ?, price = ?");
        $id = $db->lastInsertId();
        $stmt2 -> execute([$id, $_POST['prices']]);


?>



