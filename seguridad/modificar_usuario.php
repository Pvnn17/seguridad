<?php

include("conexion.php");
$id=$_REQUEST['id'];
$password=base64_encode($_POST['password']);
$query="UPDATE usuario set password='$password' where id='$id' ";
$resultado=$conexion->query($query);
if($resultado){
	header("Location index.html");
}
else{
		echo "No se puede";
	}
	
desconectar();
	header("Location vista1.php");
?>