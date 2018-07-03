<?php  	
	$db = mysqli_connect("localhost","root","","shop");

if( isset($_POST['add']) ){
	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$src = $_FILES['name'];
	$price = $_POST['price'];
	


	
	if( isset($_FILES["image"]) ){

		$src = "images/" . $_FILES["image"]["name"];
		$file_path = "../" . $src;

		move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);
	}


	$sql = "
		INSERT INTO `products`
		(`name`,`description`,`src`,`price`)
		VALUES
			('$name','$description','$src',$price)";
	$r = mysqli_query($db, $sql);

	if($r){
		echo "News Successfuly Inserted";
	}
	else{
		echo "error";
	
		

	}
}


if( isset($_POST["update"]) ){

	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$src = $_FILES['image']['name'];
	if( isset($_FILES["image"]) ){

		$src = "images/" . $_FILES["image"]["name"];
		$file_path = "../" . $src;

		move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);
	}
	



	$db = mysqli_connect("localhost","root","","shop");
	

	
	$sql = "UPDATE `products`
			SET
			 	`name` = '$name',`description` = '$description',`src` = '$src',`price` = $price
			 WHERE id = $id
			 ";

	$r = mysqli_query($db, $sql);

	if($r){
		echo "News Successfuly Updated";
	}
	else{
		echo " error";
	}
}



if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost","root","","shop");
	
	$sql = "DELETE FROM products WHERE id = $id";
	
	mysqli_query($db,$sql);
}

?>