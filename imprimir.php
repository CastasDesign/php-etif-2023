<?php 
// Codi PHP
Class Impressora {
    //Atributs
    public $tinta = true;
    public $paper = true;
    public $tamany = 'DINA4';
    public $color = 'negre';
    //Metodes
    public function imprimeix($tinta,$paper,$tamany){
        if ($tinta && $paper){
            echo 'Es pot imprimir en '. $tamany;
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Impresió del document</title>
</head>
<body>
	<h1>Titular del document</h1>
	 <!-- Codi PHP-->
</body>
</html>