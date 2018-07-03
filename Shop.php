<!DOCTYPE html>
<html>
<head>
	<title>Sayt</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="Shop.css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>
<body>
	<div class="main">
		
		<?php 
				include("header.php");
		 ?>

		<?php 
				include("menu.php");


		 ?>

	
		<div class="container">
			<h1 class="gaf">My shopping store</h1>
		
				<?php 
			$db = mysqli_connect("localhost","root","","shop");
			$sql = "SELECT * FROM `products`";
			$result = mysqli_query($db, $sql);

			
			?>


			<?php 
			while( $r = mysqli_fetch_assoc($result) ){ 
			?>
				<div class="item">
					<a href="item.php?id=<?php echo $r['id'];?>">
					<h1 style="margin-left: 43px;">
						<?php echo $r["name"]; ?>
					</h1><img src="<?php echo $r['src']; ?>" width="190"></a><h2>Price:<?php echo $r['price'] . "AMD" ?></h2>
				</div>
			<?php
			} 
			?>

		</div>
</div>

		<?php 
				include("footer.php");
		 ?>

</body>
</html>