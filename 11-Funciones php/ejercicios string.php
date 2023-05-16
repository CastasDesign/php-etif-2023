<?php 
### EJERCICIO
# Escribe un programa en php que dado dos strings compruebe si los dos primeros caracteres y los dos últimos son iguales.
$texto1 = "Hola Mundo";
$texto2 = "Hoja Redonda";
// Comprobamos si los dos primeros caracteres y los dos últimos son iguales
if (substr($texto1, 0, 2) == substr($texto2, 0, 2) && substr($texto1, -2) == substr($texto2, -2)) {
    echo "Los dos primeros y los dos últimos caracteres de los textos son iguales.";
} else {
    echo "Los dos primeros y los dos últimos caracteres de los textos no son iguales.";
}
?>