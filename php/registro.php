<?php

if(isset($_POST["btnRegistrar"]))
{
	$usuario = $_POST["nomUser"];
	$contra = $_POST["passUser"];
	$rol = $_POST["rol"];

	if(!isset($_COOKIE["contador"])){
		setcookie("contador", 0, time()+(86400 * 365));
	} else{
		setcookie("contador", $contador +=1, time()+(86400 * 365));
	}

	setcookie("nombreusuario".$contador, $usuario, time()+(86400 * 365));
	setcookie("contrausuario".$contador, $contra, time()+(86400 * 365));
	setcookie("rolausuario".$contador, $rol, time()+(86400 * 365));
	header("Location: dashboard.php");
}
