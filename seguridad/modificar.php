<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
</head>
<body background="img\fondo.jpg">
<h1> Modificar Password</h1>
<center>
		<?php
			$id =$_REQUEST['id'];
			include("conexion.php");

			$query="SELECT * FROM Usuario where id='$id'";
			$resultado=$conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>

	<form action="modificar_usuario.php?id=<?php echo $row['id'];?>" method="post">
	
		<div>
			<label for="password"> Password:</label>
			<input type="password" name="password" id="password">
		</div>

		<br>
<!-- 		<div>
			<label for="password2"> Repita Password:</label>
			<input type="password" name="password2" id="password2">
		</div>

		<br>
		 -->
		<div>
			<button class="button" type="submit"> modificame!!</button>
			<a href="index.html"><button class="button" type="button"> Cancelar</button></a>
		</div>
	</form>
</center>
	
</body>
</html>