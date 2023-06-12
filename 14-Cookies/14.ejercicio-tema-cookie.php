<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Tema Cookie</title>
    <link rel="stylesheet" type="text/css" href="..//14-Cookies/spectrum.js">
    <script src="..//14-Cookies/spectrum.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
        }
        
        input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            color: #ffffff;
            background-color: #4caf50;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Configuración de Tema</h1>
        <form action="14.ejercicio-contenido-cookie.php" method="post">
            <label for="text_color">Color del texto:</label>
            <input type="text" id="text_color" name="text_color" value="<?php echo isset($_COOKIE['text_color']) ? $_COOKIE['text_color'] : '#000000'; ?>"><br><br>
            
            <label for="background_color">Color del fondo:</label>
            <input type="text" id="background_color" name="background_color" value="<?php echo isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#FFFFFF'; ?>"><br><br>
            
            <label for="font_size">Tamaño de la letra (en píxeles):</label>
            <input type="number" id="font_size" name="font_size" min="12" max="72" value="<?php echo isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : '16'; ?>"><br><br>
            
            <input type="submit" value="Guardar configuración">
        </form>
    </div>
    
    <script>
        $(document).ready(function() {
            $("#text_color").spectrum({
                preferredFormat: "hex",
                showInput: true,
                showPalette: true,
                palette: [
                    ["#000000", "#ffffff", "#ff0000", "#00ff00", "#0000ff"]
                    // Agrega aquí los colores que desees en la paleta
                ]
            });
            
            $("#background_color").spectrum({
                preferredFormat: "hex",
                showInput: true,
                showPalette: true,
                palette: [
                    ["#000000", "#ffffff", "#ff0000", "#00ff00", "#0000ff"]
                    // Agrega aquí los colores que desees en la paleta
                ]
            });
        });
    </script>
</body>
</html>
