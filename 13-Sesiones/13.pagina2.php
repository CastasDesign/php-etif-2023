<?php 
session_start();

if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1>Hola $nombre</h1>";
} else {
	echo 'No has iniciado sesión';
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página 2</title>
</head>
<body>
	<br>
	<a href="13.cerrar.php">Cerrar sesión</a>
	<br>
	<a href="13.index.php">Volver a iniciar sesión</a>
</body>
</html>