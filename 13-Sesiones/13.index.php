<?php
session_start();
// session_destroy();

$_SESSION['nombre'] = 'Marc';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	<h1>Página de Inicio</h1>
	<p>Has cargado una nueva sesión</p>
	<a href="13.pagina2.php">Ir a la página 2</a>
</body>
</html>