<?php 

$amigo = array('telefono' => 6545647, 'altura'=>175, 'ciudad'=>'Castelldefels');

### extract()
extract($amigo); //extrae las claves de un array asociativo como si fueran variables
// var_dump($amigo);
// echo $amigo["telefono"];
// echo "<br>";
// echo $telefono;
// $telefono = 6454564654;
// echo "<br>";
// echo $amigo["telefono"];
// echo "<br>";
// echo $telefono;
// echo "<br>";
// echo $altura;
// echo "<br>";
// echo $ciudad;
// $amigo["telefono"] = $telefono;
// var_dump($amigo);

$semana = array(
	'Lunes', 'Martes', 'Miercoles',
 	'Jueves', 'Viernes', 'Sabado', 'Domingo'
);

### array_pop()

// var_dump($semana);
// echo "<br>";
// $ultimo_dia = array_pop($semana); //Extraer el �ltimo valor del array en $semana y guardandolo en la variable $ultimo_dia
// foreach ($semana as $dia) {
// 	echo $dia . '<br />';
// }
// echo "<br>";
// echo $ultimo_dia;

### array_push()

$frutas = array("naranja", "pl�tano");
// print_r($frutas);
array_push($frutas, "manzana", "ar�ndano");
// print_r($frutas);

// echo join(', ', $semana); //Une los valores de array con un salto de linea

###EJERCICIO
// Genera una enumeraci�n de $semana como un join() pero que el �ltimo valor coloque una conjunci�n "y" en vez de una coma ","

// OPCI�N 1 con Funciones Hern�n
// $ultimo_dia = array_pop($semana); //Domingo
// echo join(', ', $semana);
// echo ' y ', $ultimo_dia;

// OPCI�N 2 con Bucles Xavi

// $contar=count($semana); //7
// echo $contar;
// for ($i=0; $i<$contar; $i++) {    
// 	if($i==$contar-1){
//     	echo "y $semana[$i]";
// 	} elseif($i==$contar-2){
//         echo "$semana[$i] ";
// 	} else {
//     	echo "$semana[$i], ";
// 	}
// }

//OPCI�N 3 Funciones y array_slice() Joan

// $semana = array('Lunes', 'Martes', 'Mi�rcoles', 'Jueves', 'Viernes', 'S�bado', 'Domingo');
// $ultimo_dia = array_slice($semana, -1); //Domingo
// $otros_dias = array_slice($semana, 0, -1); 
// //$semana sin Domingo
// echo implode(', ', $otros_dias) . ' y ' . $ultimo_dia[0];


// echo count($semana); //cuenta cuandos dias hay en el array $semana

// rsort($semana); //Ordenar sort() o inverso "reverse" rsort()
// echo join(', ', $semana);

$semana_reverse = array_reverse($semana); //Orden inverso del array
// echo join(', ', $semana_reverse);
// echo "<br>";
// echo implode(', ', $semana);

$finDeSemana = array_slice($semana, -2, count($semana));
$finDeSemana = array_slice($semana, -2);
echo implode(', ', $finDeSemana);

###FUNCIONES de Arrays
// https://www.php.net/manual/es/ref.array.php

?>