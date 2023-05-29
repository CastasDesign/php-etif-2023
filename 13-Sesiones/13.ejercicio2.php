<?php
session_start();

$usuarioCorrecto = 'David'; // Usuario correcto (puedes cambiarlo según tus necesidades)

if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === $usuarioCorrecto) {
    $nombreUsuario = $_SESSION['usuario'];
    echo "<h1>Bienvenido, $nombreUsuario !!</h1>";
} else {
    echo '<h1>Lo siento, pero no eres el usuario correcto.</h1>';
    echo '<p>Deberás abandonar la página, o volver atrás e introducir el usuario correcto.</p>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo 2</title>
    <style>
        /* Estilos CSS */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        h1, p {
            margin-bottom: 20px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="GET" action="13.ejercicio1.php">
        <button type="submit">Volver al Formulario</button>
    </form>
</body>
</html>
