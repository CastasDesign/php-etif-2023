<?php 

$texto = 'Adeu Andreu';

echo htmlspecialchars($texto); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar c�digo fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar c�digo <b>Hola</b> o peor aun, c�digo Javascript que se pueda ejecutar
echo '<br />';
echo trim($texto); //Quita los espacios al principio y al final
echo '<br />';
echo strlen($texto); //Cuenta los caracteres totales del string
echo '<br />';
echo substr($texto, 0, 4); //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
echo '<br />';
echo substr($texto, 5, strlen($texto)); //Recorta la cadena de texto en este caso del 5 string hasta el �ltimo.
echo '<br />';
echo substr($texto, -3); //Recorta la cadena de texto en este caso del �ltimo hacia atras, en este caso 3 caracteres. 
echo '<br />';
echo strtoupper($texto); //Convierte a may�sculas
echo '<br />';
echo strtolower($texto); //Convierte a min�sculas
echo '<br />';
echo strpos($texto, 'n'); //Posici�n del string
echo '<br />';
echo strrev($texto);  //Invierte el texto
echo '<br />';
$nuevoTexto = str_replace("Andreu", "siau", $texto); //Sustituye textos
echo $nuevoTexto;
echo '<br />';

?>