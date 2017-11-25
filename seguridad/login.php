<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
</head>

<body background="img\fondo.jpg">
	<h1>Login de Usuarios</h1>
				<form action="checklogin.php" method="post">

				<label>Nombre Usuario:</label><br>
				<input  name="username" type="text" id="username" required>
				<br><br>

				<label>Password:</label><br>
				<input name="password" type="password" id="password" required>
				<br><br>

				<input class="button" type="submit" name="Submit" value="LOGIN">
				<a href="index.html"><button class="button" type="button"> Cancelar</button></a>
				</form>
</body>
</html>