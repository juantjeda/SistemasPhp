<!DOCTYPE html>
<html lang="es">
<head>
	<META charset="utf-8"/>
	<title>Bienvenido</title>
</head>
<body>
	<h1>Validacion de Usuario</h1>
	<?php 
		if($_GET['error_usuario'] =="Si"){
			?>
			<p>Datos Incorrectos.</p>
			<?php
		}
		else{
			?>
			<p>Introduce tu usuario y password</p>
			<?php
		}
	?>
	<form action="autentica.php" method="POST">
		<p>Usuario: <input type="text" name="usuario"/></p>
		<p>Password: <input type="text" name="password"/></p>
		<input type="submit"/>
	</form>
</body>
</html>