<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Contacto - Resultado</title>
  <link rel="stylesheet" type="text/css" href="12.styles_formulario.css">
</head>
<body>
  <h2>Resultado del Formulario de Contacto</h2>
  
  <?php
  // Verificar si se ha enviado el formulario
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener los valores enviados
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $telefono = $_GET["telefono"];
    $mensaje = $_GET["mensaje"];
    
    // Validar los campos
    if (empty($nombre) || empty($email) || empty($telefono) || empty($mensaje)) {
      echo "<p class='error'>Por favor, rellena todos los campos del formulario.</p>";
    } else {
      // Aquí puedes realizar cualquier acción con los datos del formulario
      // Por ejemplo, enviar un correo electrónico, guardar en la base de datos, etc.
      
      echo "<p class='success'>¡Formulario enviado correctamente!</p>";
    }
  }
  ?>
</body>
</html>