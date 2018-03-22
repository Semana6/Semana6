<?php 

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar Usuario</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/menu.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/animacion.js"></script>
	<script src="../js/menu.js"></script>
</head>
<body id="body">
	<div class="cuadro" id="c-reg">
		<div class="cuadro-ins bg-primary">
			<p class="lead text-center">
				Registrar Usuario
			</p>
		</div>
		<div class="wrap">
			<form action="registro.php" method="POST" >
				<div class="form-row">
					<div class="form-column col-md-12">
						<label for="nomUser">Nombre usuario:</label>
						<input type="text" name="nomUser" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-column col-md-12">
						<label for="passUser">Contraseña:</label>
						<input type="password" name="passUser" class="form-control">
					</div>
				</div>
					<div class="form-row">
					<div class="form-column col-md-12">
						<label for="passUser">Rol del Usuario:</label>
						<select name="rol" id="rol" class="form-control">
							<option value="Administrador">Administrador</option>
							<option value="Secretaria">Secretaria</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-column col-md-12">
						<input type="submit" name="btnRegistrar" class="btn btn-primary" value="registrar">
					</div>
				</div>
			</form>
		</div>
	</div>	
</body>
</html>