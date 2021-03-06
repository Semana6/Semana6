<?php 

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/animacion.js"></script>
	<script src="js/menu.js"></script>
</head>
<body id="body">
	<div class="cuadro" id="c-login">
		<div class="cuadro-ins bg-primary">
			<p class="lead text-center">
				Ingresar
			</p>
		</div>
		<div class="wrap">
			<form action="php/ingresar.php" method="POST" >
				<div class="form-row">
					<div class="form-column col-md-12">
						<label for="user">Usuario:</label>
						<input type="text" name="user" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-column col-md-12">
						<label for="pass">Contraseña:</label>
						<input type="password" name="pass" class="form-control">
					</div>
				</div>
	
				<div class="form-row">
					<div class="form-column col-md-12">
						<input type="submit" name="btnIngresar" class="btn btn-primary" value="ingresar">
					</div>
				</div>
			</form>
		</div>
	</div>	
</body>
</html>