
<?php
session_start();
?>

<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "seguridad";
$tbl_name = "usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password=base64_encode($_POST['password']);
echo $password . "
<html>
<body>
<br>
</body>
</html>";

$sql = "SELECT * FROM $tbl_name WHERE usuario = '$username'";

$result = $conexion->query($sql);

if ($result->num_rows > 0) { 
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if($password ===  $row['password'])
 {    echo "Bienvenido! ";
 } 
 else { 
   echo "Username o Password estan incorrectos.";	
}
 mysqli_close($conexion); 
 ?>