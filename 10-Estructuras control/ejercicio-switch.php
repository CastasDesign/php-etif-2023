<?php 
##EJERCICIO lo mismo con dias de la semana y un switch que refleje los dias de la semana "lunes", "martes"...y el default tenga "buen fin de semana! El $dia lo obtenga con el date()
$dia= date("N"); //Con un "w" seria 0 Domingo y 6 Sábado
// $dia = 7;
switch($dia){
	case 1:
		echo "Hoy es Lunes";
	break;

	case 2:
		echo "Hoy es Martes";
	break;
	case 3:
		echo "Hoy es Miércoles";
	break;

	case 4:
		echo "Hoy es Jueves";
	break;

	case 5:
		echo "Hoy es Viernes";
	break;

	default:
		echo "Buen fin de semana!";
	break;
}

echo "<br>" . date("c"); //Formato completo de fecha

?>