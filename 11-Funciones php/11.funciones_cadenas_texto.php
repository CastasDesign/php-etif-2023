<?php 

$texto = 'Adeu Andreu';

echo htmlspecialchars($texto); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar código fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar código <b>Hola</b> o peor aun, código Javascript que se pueda ejecutar
echo '<br />';
echo trim($texto); //Quita los espacios al principio y al final
echo '<br />';
echo strlen($texto); //Cuenta los caracteres totales del string
echo '<br />';
echo substr($texto, 0, 4); //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
echo '<br />';
echo substr($texto, 5, strlen($texto)); //Recorta la cadena de texto en este caso del 5 string hasta el último.
echo '<br />';
echo substr($texto, -3); //Recorta la cadena de texto en este caso del último hacia atras, en este caso 3 caracteres. 
echo '<br />';
echo strtoupper($texto); //Convierte a mayúsculas
echo '<br />';
echo strtolower($texto); //Convierte a minúsculas
echo '<br />';
echo strpos($texto, 'n'); //Posición del string
echo '<br />';
echo strrev($texto);  //Invierte el texto
echo '<br />';
$nuevoTexto = str_replace("Andreu", "siau", $texto); //Sustituye textos
echo $nuevoTexto;
echo '<br />';

?>