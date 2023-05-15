<?php 

/* FUNCIONES INTEGRADAS
count();
sort();
rsort();
var_dump();
print_r();

+ de 1000 funciones
https://www.w3schools.com/php/php_ref_overview.asp
*/

// FUNCIONES DEFINIDAS POR EL USUARIO

#Sintaxis función sin argumentos
function saludar1(){
	return "Hola!1";
}
echo saludar1();
echo '<br />';

function saludar2(){
	echo "Hola!2";
}
saludar2();

echo '<br />';

#Con un solo parámetro
function saludar($nombre){
	return 'Hola, ' . $nombre;
}

echo saludar('Angel') . '<br />';
echo saludar('Fernando') . '<br />';
echo saludar('Rafael') . '<br />';
echo saludar('Manuel') . '<br />';


#Con dos parámetros

function sumar($numero1, $numero2){
 	$resultado = $numero1 + $numero2;
 	return $resultado;
 }
echo $resultado = sumar(10, 15);
echo '<br />';

$numero1= '256';
$numero2= '545';

echo $numero1 ." + "  . $numero2 . " = " . $resultado = sumar($numero1, $numero2);

?>