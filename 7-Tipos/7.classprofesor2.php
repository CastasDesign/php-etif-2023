<?php 
//Creamos la clase Profesor
    class Profesor {
        //PROPIEDADES del objeto
        //ATRIBUTOS
        private $nombre;
        private $materia;
        //MÉTODOS
        //Getters y Setters
        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function getMateria() {
            return $this->materia;
        }
        public function setMateria($materia) {
            $this->materia = $materia;
        }
    }
    
    $p1 = new Profesor();
    $p2 = new Profesor();
    $p3 = new Profesor();

    $p1->setNombre("Juan");
    $p2->setNombre("Pedro");
    $p3->setNombre("Manolo");
    $p1->setMateria("Inglés");
    $p2->setMateria("Filosofía");
    $p3->setMateria("Matemáticas");

    echo 'El nombre del profesor es ' . $p1->getNombre(). ' '
    . ' ' .'e imparte la materia de' . ' ' . $p1->getMateria() .'.';
    echo '<br>El nombre del profesor es ' . $p2->getNombre(). ' '
    . ' ' .'e imparte la materia de' . ' ' . $p2->getMateria() .'.';
    echo '<br>El nombre del profesor es ' . $p3->getNombre(). ' '
    . ' ' .'e imparte la materia de' . ' ' . $p3->getMateria() .'.';
    echo '<br>';

?>