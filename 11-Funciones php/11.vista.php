<!DOCTYPE html>
<html>
<head>
    <title>Resultado del cálculo del área</title>
</head>
<body>
    <h1>Resultado del cálculo del área</h1>

    <?php
    // Verificar si se ha enviado un valor de lado válido
    if(isset($_POST['side']) && is_numeric($_POST['side'])) {
        $side = floatval($_POST['side']);

        // Calcular el área del hexágono
        $area = (3 * sqrt(3) * pow($side, 2)) / 2;

        // Mostrar el resultado
        echo "<p>El área del hexágono con longitud de lado $side es: $area</p>";
    } else {
        echo "<p>Error: ingrese una longitud de lado válida.</p>";
    }
    ?>
</body>
</html>