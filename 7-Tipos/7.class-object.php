<?php 
//Creamos la clase Profesor
    class Profesor {
        //Atributos que son las propiedades del objeto
        public $nombre;
        public $apellido;
        public $altura;
        public $materia;
        // echo $nombre; no funciona

        //Métodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }
    $profesor1 = new Profesor();//Creamos OBJETO
    $profesor1->nombre = 'Marc';
    $profesor1->apellido = "Esteve";
    $profesor1->altura = 1.75;
    $profesor1->materia= "Desarrollo web";
    // echo gettype($profesor1); //Muestra tipo "object"
    echo 'El nombre del profesor es ' . $profesor1->nombre . ' ' . $profesor1->apellido . " con una altura de " . $profesor1->altura . 'm,'
    . ' ' .'e imparte la materia de' . ' ' . $profesor1->materia .'.';
    $profesor1->hablar("<br>Un cordial saludo.");
    $profesor2 = new Profesor();//Creamos un segundo OBJETO de la CLASS "Profesor"
    // echo gettype($profesor2); //Muestra tipo "object"
    $profesor2->nombre = "Juan";
    $profesor2->apellido = "Ruiz";
    $profesor2->altura = 1.78;
    $profesor2->materia= "Ingles";
    echo '<br>El nombre del profesor es ' . $profesor2->nombre . ' ' . $profesor2->apellido . " con una altura de " . $profesor2->altura . 'm,'
    . ' ' .'e imparte la materia de' . ' ' . $profesor2->materia .'.';
    $profesor2->hablar("<br>A cordial greeting.");
?>