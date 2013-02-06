<!DOCTYPE html>
<?php
session_start();
?>
<html lang="es">
<head>
	<META charset="utf-8"/>
	<title>Bienvenido</title>
</head>
<body>
	<h1>Validacion de Usuario</h1>
	<?php
	if(isset($_POST['enviar'])){
		if(empty($_POST['usuario']) || empty($_POST['password']))
			echo 'Debes de llenar todos los datos';
		else
			if($_POST['usuario'] ==TRUE and $_POST['password'] ==TRUE){
				$_SESSION['usuario'] = $_POST['usuario'];
				$_SESSION['password'] = $_POST['password'];	
				echo 'Te has logeado como '.$_SESSION['usuario'];
			}
	}
	?>
	<form action="inicio.php" method="POST">
		<p>Usuario: <input type="text" name="usuario"/></p>
		<p>Password: <input type="password" name="password"/></p>
		<input type="submit" name="enviar"/>
	</form>
</body>
</html>