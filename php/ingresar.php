<?php 
if(isset($_POST["btnIngresar"]))
{
	$usuario = $_POST["user"];
	$pass = $_POST["pass"];
	$rol = "";
	$cont = 0;
	$puntero = 0;

	if($usuario == "Admin" && $pass="contraAdmin")
	{
		session_start();
		$_SESSION["user"] = "Administrador";
		$_SESSION["rol"]  = "Administrador";
		header("Location: dashboard.php");
	}
	else if($usuario == "Secretaria" && $pass="contraSecretaria")
	{
		session_start();
		$_SESSION["user"] = "Secretaria";		
		$_SESSION["rol"]  = "Secretaria";
		header("Location: dashboard.php");
	} 
	else{
		for ($i=0; $i <= $_COOKIE["contador"] ; $i++) { 
			if(($usuario == $_COOKIE["nombreusuario".$i]) && (($usuario == $_COOKIE["nombreusuario".$i])))
			{
				$cont++;
				$puntero = $i;
			}
		}

		if($cont >= 0)
		{
			session_start();
			$_SESSION["user"] = $_COOKIE["nombreusuario".$puntero];		
			$_SESSION["rol"]  = $_COOKIE["rolausuario".$puntero];
			header("Location: dashboard.php");
		}
		else{
			header("Location: ../index.php");
		}
	}
}
else{
		header("Location: ../index.php");
	}