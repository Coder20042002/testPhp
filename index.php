<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div class="container">
		<div class="col">
			<?php include_once "menu.php"

			?>
		</div>
		<div class="col">
			<?php include_once "content.php"

			?>
		</div>
	</div>

	<form action="process.php" method="get">
		<input  type="text" name="q" placeholder="Name" >
		<input class="btn btn-danger" type="submit" name="a" value="submit" >
		<input class="btn btn-info" type="button" value="Cancel">

	</form>

	
</body>

</html>