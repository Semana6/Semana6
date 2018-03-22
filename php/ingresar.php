<?php 
if(isset($_POST["btnIngresar"]))
{
	$usuario = $_POST["user"];
	$pass = $_POST["pass"];
	$rol = "";

	if($usuario == "Admin" && $pass="contraAdmin")
	{
		setcookie("Rol", "Administrador", time() + 3600, '/');
		header("Location: dashboard.php");
	}
	else if($usuario == "Secretaria" && $pass="contraSecretaria")
	{
		setcookie("Rol", "Secretaria", time() + 3600, '/');
		header("Location: dashboard.php");
	} 
	else{
		header("Location: ../index.php");
	}
}