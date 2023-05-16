<?php 
### EJERCICIO
# 1.- Escribe un programa que devuelva si un string es palíndromo.
$palabra = "udaiajiri";
$palabraRev = strrev($palabra);
if ($palabra==strrev($palabra)) {
    echo "$palabra es un palindromo.";
} else {
    echo "$palabra no es palindromo.";
}
echo '<br />';
$palabra = "aibofobia";
$palabraRev = strrev($palabra);
if ($palabra==strrev($palabra)) {
    echo "$palabra es un palindromo.";
} else {
    echo "$palabra no es palindromo.";
}
?>