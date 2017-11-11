<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "seguridad";

$conexion= new mysqli($host_db, $user_db, $pass_db, $db_name);
if($conexion->connect_error)
{
	die("La conexion fallo: " . $conexion->connect_error);
}
$datos ="SELECT * FROM usuario";
$dUsuario = $conexion->query($datos);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<h1>Aqui veremos los usuarios</h1>
	</div>
	<section>
		
		<table class="table">
			<tr>
				<th>Nick</th>
				<th>Clave</th>
			</tr>
			<?php
			while ($regUsuarios= $dUsuario->fetch_array(MYSQLI_BOTH)) {
				echo '<tr>
				<td>'. $regUsuarios['usuario'].'</td>
				<td>'. $regUsuarios['password'].'</td>
				</tr>';
			}
			?>

		</table>

	</section>
</body>
</html>