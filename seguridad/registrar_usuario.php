
<?php

include("conexion.php");

$form_pass = $_POST['code'];
$hash = base64_encode($form_pass);


$buscarUsuario = "SELECT * FROM usuario WHERE usuario = '$_POST[name]' ";
$result = $conexion->query($buscarUsuario);
$count = mysqli_num_rows($result);
if($count==1){
	echo "El nombre de usuario ya ta";
}
else{
	$query= "INSERT INTO usuario (usuario,password,nombre,apellido) VALUES ('$_POST[name]','$hash','$_POST[nombre]','$_POST[apellido]')";
	if ($conexion->query($query) === TRUE) {
		echo '<script type="text/javascript">document.getElementById("contenido").innerHTML = "El formulario se envío con éxito";</script>';
		header('Location: index.html');
	}
	else{
		echo "Jodase 2 ";
	}
}

desconectar();

?>
