<!DOCTYPE html>
<html>
<head>
	<title>Subtraction</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css.map">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">
		<h1>Subtraction</h1>
		<hr>
		<div align="right"><a href="index.php">Back</a></div>
		<form action="" method="get">
			<input type="text" name="num1" placeholder="First number"> <br> <br>
			<input type="text" name="num2" placeholder="Second number"> <br> <br>
			<button id="submit" class="btn btn-danger">Subtract</button>
		</form>

		<b><?php 
			if(isset($_GET['num1']) && isset($_GET['num2'])){
			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];

			function sub($num1,$num2){
			return $num1 - $num2;
			}

			 echo "<br> Subtraction is : ". sub($num1,$num2);
			}
		?></b> 
	</div>
</body>
</html>