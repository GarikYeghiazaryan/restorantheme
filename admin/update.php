<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "shop");
if($_FILES['image']['name']){
$sql = "UPDATE `products`
SET `name` = '$name',`description` = '$description',`src` = '$src',`price` = $price
WHERE id = $id";
}
else{
$sql = "UPDATE `products`
SET `name` = '$name',`description` = '$description',`price` = $price
WHERE id = $id";
}

$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<div class="header">
			ADMINISTRATION
		</div>		
		<div class="container">	
			<h1>Update product <?php echo $_GET['id']; ?></h1>		

			<form action="action.php" method="post" enctype="multipart/form-data">
				<label for="name">name</label><br>
				<input type="text" name="name" id="name" value="<?php echo $r['name']; ?>"> <br><br>

				<label for="description">description</label><br>
				<textarea name="description" id="description" rows="6" cols="46" > <?php echo $r['description']; ?></textarea><br><br>

				<label for="price">Image-name</label><br>
				<input name="src" id="src"  value="<?php echo $r['src']; ?>"><br>
				<label for="price">NEW IMAGE</label><br>
				<input type="file" name="image"><br><br>			



				<label for="price">price</label><br>
				<input name="price" id="price"  value="<?php echo $r['price']; ?>"><br><br>				

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<input type="submit" name="update">
			</form>			
		</div>
	</div>
</body>
</html>