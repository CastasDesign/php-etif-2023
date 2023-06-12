<?php
require('vista.php');
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Validar y filtrar el campo "nom"
    if (empty($_POST['nom'])) {
        $errors[] = 'El campo "Nom" es obligatorio.';
    } else {
        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    }

    // Validar y filtrar el campo "correu"
    if (empty($_POST['correu'])) {
        $errors[] = 'El campo "Correu" es obligatorio.';
    } elseif (!filter_var($_POST['correu'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'El campo "Correu" no tiene un formato válido.';
    } else {
        $correu = filter_var($_POST['correu'], FILTER_SANITIZE_EMAIL);
    }

    // Mostrar errores o mensaje de éxito
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "<p>Todos los campos son correctos. El formulario se envió con éxito.</p>";
    }
}
?>
