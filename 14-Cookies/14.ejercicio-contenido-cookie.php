<?php
if (isset($_POST['text_color']) && isset($_POST['background_color']) && isset($_POST['font_size'])) {
    setcookie('text_color', $_POST['text_color'], time() + (86400 * 30), '/'); // Cookie válida por 30 días
    setcookie('background_color', $_POST['background_color'], time() + (86400 * 30), '/'); // Cookie válida por 30 días
    setcookie('font_size', $_POST['font_size'], time() + (86400 * 30), '/'); // Cookie válida por 30 días
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contenido con Configuración</title>
    <style>
        body {
            font-size: <?php echo isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : '16px'; ?>;
            color: <?php echo isset($_COOKIE['text_color']) ? $_COOKIE['text_color'] : '#000000'; ?>;
            background-color: <?php echo isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#FFFFFF'; ?>;
        }
        
        h1 {
            font-size: <?php echo isset($_COOKIE['font_size']) ? ($_COOKIE['font_size'] * 2) : '32px'; ?>;
            color: <?php echo isset($_COOKIE['text_color']) ? $_COOKIE['text_color'] : '#000000'; ?>;
        }
    </style>
</head>
<body>
    <h1>Contenido con Configuración</h1>
    <p>Este es un párrafo de ejemplo.</p>
    <p><a href="14.ejercicio-tema-cookie.php">Volver a configuración</a></p>

</body>
</html>
