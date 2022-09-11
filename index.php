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
<style>
	.header{font-weight: bold; color:white;background-color: black;}
	.chan{color:black;background-color: #9f9;}
	.le{color:brown;background-color: #ff9;}
	.td_quy{padding:4px 0;}
</style>
<body>
	<?php require"module.php"; ?>
	
	<table>
		<?php
		for($i=0;$i<10;$i++) {
			echo"<tr>";
			for($j=0;$j<10;$j++) {
			echo"<td onclick='alert(".($j+$i*10).")' style='background-color:".makeRGB()."'>".($j+$i*10)."</td>";
			}
		}
		?>
	</table>

	<table>
		<tr class="tb">
			<td>Quý I</td>
			<td>Quý II</td>
			<td>Quý III</td>
			<td>Quý IV</td>
			
		</tr>
		<?php
		for($i=0;$i<10;$i++) {
			$cname=($i%2==0)?"chan":"le";
			echo"
			<tr class='".$cname."'>
				<td class='td_quy'>".(100000+$i*100000)."</td>
				<td class='td_quy'>".(110000+$i*100000)."</td>
				<td class='td_quy'>".(120000+$i*100000)."</td>
				<td class='td_quy'>".(130000+$i*100000)."</td>
			</tr>
			";
	
		}
		?>
	</table>
	<?php
	
	function INBANG($a,$b,$c,$d,$e,$f) {
		echo"
		<table with='100%' boder='1'> 
		<tr>
			<td>STT</td>
			<td>Tên</td>
		</tr>
		<tr>
			<td>1</td>
			<td>$a</td>
		</tr>
		<tr>
			<td>2</td>
			<td>$b</td>
		</tr>
		<tr>
			<td>3</td>
			<td>$c</td>
		</tr>
		<tr>
			<td>4</td>
			<td>$d</td>
		</tr>
		<tr>
			<td>5</td>
			<td>$e</td>
		</tr>
		<tr>
			<td>6</td>
			<td>$f</td>
		</tr>
	</tr>

	</table>
		";
	}
	INBANG("PHUONG","NAM","HANG","PHƯỢNG","TƯ","BA");

	function InMot($a,$b) {
		echo"<li><a href='Tinh.php?P=".$a."&Q=".$b."'>$a+$b<";

	}

	function Tong($a,$b) {
		return $a+$b;
	}
	$a=$_GET['P'];
	$b=$_GET['Q'];
	
	echo"Tổng của $a và $b là :".Tong(4,5);
	echo"<br>";
	echo(isset($a)?$a :"Biến a chưa đc khởi tạo" );
	$a=4;echo"<br>";
	echo(isset($a)?$a :"Biến a chưa đc khởi tạo");

	
	?>
	<ul>
		<?php
		InMot(3,5);
		InMot(7,8);
		InMot(7,5);
		InMot(32,1);

		?>
	</ul>


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