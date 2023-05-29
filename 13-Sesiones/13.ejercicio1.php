<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    if (!empty($usuario)) {
        $_SESSION['usuario'] = $usuario;

        header('Location: 13.ejercicio2.php');
        exit;
    } else {
        $error = "Por favor, completa todos los campos.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo 1</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-container button[type="submit"] {
            margin-top: 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .form-container button[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Ingresa tus datos para poder acceder.</h1>
    <div class="form-container">
        <form method="POST" action="">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>
            <br>
            <button type="submit">Acceder</button>
        </form>

        <?php
        if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
    </div>
</body>

</html>