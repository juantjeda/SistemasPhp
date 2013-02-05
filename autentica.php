<?php
	include('conecta.php');
	$sql="SELECT COUNT(*) FROM usuarios WHERE usuario ='$_POST['usuario']' AND pass_usuario =md5($_POST['password'])";
	$consulta=mysql_query("$sql");
	$total=mysql_result($consulta, 0);
	if($total ==1){
		echo "Usuario Valido";
	}
	else{
		echo "Usuario Invalido";
	}
?>