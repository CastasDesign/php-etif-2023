<?php
Class Impressora {
    // Atributos
    public $tinta = true;
    public $paper = true;
    public $tamany = 'DINA4';
    public $color = 'negre';

    // Métodos
    public function imprimeix($tinta, $paper, $tamany) {
        if ($tinta && $paper) {
            echo 'Es pot imprimir en ' . $tamany . ', en color ' . $this->color;
        }
        else{
            echo 'Falta tinta o paper';
        }
    }
}


$miImpresora = new Impressora();
$miImpresora->imprimeix($miImpresora->tinta, $miImpresora->paper, $miImpresora->tamany);


$diasSetmana = array('dilluns', 'dimarts', 'dimecres', 'dijous', 'divendres', 'dissabte', 'diumenge');

sort($diasSetmana);

echo "<h1>Días de la setmana</h1>";
echo "<ul>";
foreach ($diasSetmana as $dia) {
    echo "<li>$dia</li>";
}
echo "</ul>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Impresió del document</title>
</head>
<body>
	<h1>Imprimir.php</h1>
	 <!-- Codi PHP-->
</body>
</html>

<!-- ACTIVIDAD PRACTICA 1 EJERCICIO 5 A-->
<!-- La clase del código PHP proporcionado se llama "Impressora" y tiene los siguientes elementos:

Atributos:
cuatro atributos publicos: $tinta, $paper, $tamany y $color. 
Son diferentes propiedades de una impresora. 
$tinta y $paper; son variables booleanas que indican si hay tinta y papel disponibles en la impresora. 
$tamany y $color; son variables de texto que representan el tamaño y el color predeterminado de la impresora.

Métodos: 
La clase tiene un método publico llamado imprimeix. 
Con tres parametros ($tinta, $paper, $tamany).
Si tanto la tinta como el papel están disponibles, se muestra un mensaje en pantalla indicando que se puede imprimir en el tamaño especificado.

LAS INSTRUCCIONES PARA PODER MOSTRAR EN PANTALLA EL TEXTO; 'eS POT IMPRIMIR EN DINA4, en color negre' ESTAN ESCRITAS EN EL CODIGO EN LAS LINEAS
12, 21, 22.
Se ha añadido el objeto $miImpresora de la clase Impressora y se ha llamado al método imprimeix() pasando los valores correspondientes.
Se ha corregido la concatenación del mensaje en el método imprimeix() al añadir el $this->color para acceder al atributo $color de la clase Impressora.-->

<!-- ACTIVIDAD PRACTICA 1 EJERCICIO 5 B
La diferencia principal entre public, private y protected es que loos atributos public son accesibles desde cualquier lugar, los atributos private solo 
son accesibles dentro de la misma clase y los atributos protected son accesibles dentro de la clase y también desde las clases hijas que heredan de ella, 
pero al igual que los private, no desde fuera de la clase y subclases (hijas).
-->
