<!DOCTYPE html>
<html>
<head>
	<title>Even or Odd</title>
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
		<h1>Even or Odd</h1>
		<hr>
		<div align="right"><a href="index.php">Back</a></div>
		<form action="" method="get">
			<input type="text" name="num" placeholder="Enter a number"> <br> <br>
			<button id="submit" class="btn btn-danger">Check</button>
		</form>
		<b><?php 
			if(isset($_GET['num'])){
			$num = $_GET['num'];
			

			function check($num){
				if($num %2 == 0){
					echo "<br> $num is EVEN...";
				}else{
					echo "<br> $num id ODD...";
				}
			}

			 check($num);
			}
		?></b> 
	</div>
</body>
</html>