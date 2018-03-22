<?php 

function Zeldas(){
	echo '<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/menu.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/animacion.js"></script>
	<script src="../js/menu.js"></script>';
}

function HeaderBar(){
 
	echo '<nav class="navbar fixed-top navbar-dark bg-darkBlue d-flex">
	<a href="" class="navbar-brand mr-auto p-2">Semana 6</a>
	   <div class="dropdown show p-2 align-middle">
                  <a class="btn btn-danger btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    '.$_SESSION["user"].'
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item text-danger" href="logout.php">Cerrar Sesión</a>
                  </div>
                </div>
	<a id="btn-menu-nav" class="p-2">&#9776;</a>
</nav>';
}

function Menu($rol)
{
	if($rol == "Administrador")
	{
		echo '<div class="menu">
		<p class="titulo-menu">Menú <a id="btnX">&#9776;</a></p>
		<ul>
			<a class="text-center" href="" class="menu-it">
				<li>Configuraciones</li>
			</a>
			<a class="text-center" href="" class="menu-it">
				<li>Actividades</li>
			</a>
			<a class="text-center"  href="" class="menu-it">
				<li>Reportes</li>
			</a>
			<a class="text-center"  href="" class="menu-it">
				<li>Enlaces</li>
			</a>
			<a class="text-center" href="regUsuario.php" class="menu-it">
				<li>Registrar Usuario</li>
			</a>
		</ul>
	</div>';
	}
	else if($rol == "Secretaria")
	{
		echo '<div class="menu">
		<p class="titulo-menu">Menú <a id="btnX">&#9776;</a></p>
		<ul>
			<a class="text-center" href="" class="menu-it">
				<li>Actividades</li>
			</a>
			<a class="text-center" href="" class="menu-it">
				<li>Enlaces</li>
			</a>
			<a class="text-center"  href="" class="menu-it">
				<li>Intranet</li>
			</a>
		</ul>
	</div>';
	}
	
}

function InicioSes()
{
	session_start();
	if(isset($_SESSION["user"]))
	{
		if(empty($_SESSION["user"]))
		{
			header("Location: ../index.php");
		}
	} else{
		header("Location: ../index.php");
	}
}