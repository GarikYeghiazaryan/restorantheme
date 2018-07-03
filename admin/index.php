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
			<div class="form">
				<form action="action.php" method="post" enctype="multipart/form-data">
					<label for="name">Name</label><br>
					<input type="text" name="name" id="name"> <br><br>

					<label for="description">description</label><br>
					<textarea name="description" id="description" rows="6" cols="46"></textarea><br><br>

					<label for="price">Price</label><br>
					<input name="price" id="price" rows="10" cols="46"><br><br>

					<input type="file" name="image"><br><br>

					<input type="submit" name="add">
				</form>
			</div>

			<div class="list">
				<?php 
				include("news_list.php"); 
				?>
			</div>			
		</div>
	</div>
</body>
</html>