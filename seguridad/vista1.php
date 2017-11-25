<?php
include('conexion.php');
$datos ="SELECT * FROM usuario";
$dUsuario = $conexion->query($datos);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
</head>
<body background="img\fondo.jpg">
	<div>
		<h1>Aqui veremos los usuarios</h1>
	</div>
	<p>Quiero desearte en este día tan especial como es hoy, tu cumpleaños, todo lo mejor del mundo. Eres ese primo que siempre ha sido como un hermano y que comparte mi sangre, así que hoy he decidido dedicarte unas bonitas palabras para que sepas que no sólo es un día importante para ti, sino para todos los que te quieren.

	Estar a tu lado es como estar en el paraíso, porque haces que los demás sientan que merecen el bien, que merecen ser felices y que la vida merece la pena. Lo único que deseo cuando soples esa vela, es que pasemos muchos más años juntos, compartiendo todos los momentos, empezando por un abrazo y siguiendo por mil sonrisas más.

	En este preciso instante estoy pensando en lo importante que eres en mi vida y que hoy es el día perfecto para decírtelo. Hoy es tu cumpleaños y agradezco a tu madre y a Dios que existes, porque naciste y porque te conocí. Podría haber sufrido muchos golpes, podría haber sufrido muchos momentos malos, bajos, pero gracias a ti… eso cambió. Cuando yo estaba abajo me obligabas a venirme arriba, cuando estaba demasiado arriba…me lanzabas para abajo.

	Crezco contigo, creo en ti y aprendo a tu lado. En cada rincón de mi pequeño corazón hay algo que va dedicado a ti porque eres muy importante. Hoy quiero regalarte mi corazón porque es tu cumpleaños y porque hoy no hay medias tintas en esto del cariño.
	</p>
	<br>
	<section>
		<center>
			<table class="tabla" border="1">
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Nick</th>
					<th colspan="2">Operaciones</th>
					
				</tr>
				<?php
				while ($regUsuarios= $dUsuario->fetch_array(MYSQLI_BOTH)) {
					echo '<tr>
					<td>'. $regUsuarios['nombre'].'</td>
					<td>'. $regUsuarios['apellido'].'</td>	
					<td>'. $regUsuarios['usuario'].'</td>
				    <td><a href="modificar.php?id='.$regUsuarios['id'].'"> Modificar </a></td>
				    <td><a href="eliminar.php?id='.$regUsuarios['id'].'"> Eliminar</a></td>
					</tr>';
				}
				?>

			</table>
			<br>
			<a href="index.html"><button class="button" type="button"> Cancelar</button></a>
		</center>
	</section>
</body>
</html>