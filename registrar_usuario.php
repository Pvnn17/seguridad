<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "seguridad";
$tb1_name = "usuario";
$form_pass = $_POST['code'];

$hash = base64_encode($form_pass);
$conexion= new mysqli($host_db, $user_db, $pass_db, $db_name);
if($conexion->connect_error)
{
	die("La conexion fallo: " . $conexion->connect_error);
}
$buscarUsuario = "SELECT * FROM $tb1_name WHERE usuario = '$_POST[name]' ";

$result = $conexion->query($buscarUsuario);
$count = mysqli_num_rows($result);
if($count==1){
	echo "<br />". "El nombre de usuario ya ta";

}
else{
	$query= "INSERT INTO usuario (usuario,password) VALUES ('$_POST[name]','$hash')";
	if ($conexion->query($query) === TRUE) {
		echo "Creado";
	}
	else{
		echo "Jodase 2 ";
	}

}
mysqli_close($conexion);
?>

