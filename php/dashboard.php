<?php 
	include 'plantillas.php';
	// inicioSes();
	session_start();
	$rol = $_SESSION["rol"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<?php Zeldas() ?>
</head>
<body>
	<?php 
		HeaderBar();
		Menu($rol);
	?>
	<div class="cuadro" id="c-login">
		<div class="wrap">
			<?php 
			?>
		</div>
	</div>
</body>
</html>