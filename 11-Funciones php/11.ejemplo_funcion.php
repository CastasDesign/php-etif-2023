<?php 

function calcular_area_triangulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_triangulo(10, 10);

echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';

//EJERCICIO: CREAR UNA FUNCIÓN PARA CALCULAR EL AREA DE UN HEXÁGONO DE FORMULA = (PERÍMETRO * APOTEMA)/2 Y EL PERÍMETRO ES IGUAL A UN LADO *6
function calcularPerimetroHexagono($lado){
	return $lado * 6;
}
$perimetro = calcularPerimetroHexagono(2);
echo "El perímetro del hexágono regular es de : $perimetro <br>";

function calcularAreaHexagono($perimetro,$apotema){
	return ($perimetro * $apotema)/2;
}
$areaHex = calcularAreaHexagono($perimetro, 3);
echo "El área de un Hexágono es:  $areaHex <br>";

//Función única "unida" 

function calcularAreaHexagono2($lado) {
    return (($lado * 6) * $lado / (2 * tan(deg2rad(30)))) / 2;
}
$lado = 30; //***Esta variable es la que se cambia
$area = ($lado);
echo "El area del hexagono es " . $area . " cuando el lado es " . $lado;

?>