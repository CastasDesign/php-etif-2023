<?php

//Ejercicio: Crea de la misma estructura que clase-animal-herencia.php, la superclase Vehiculo, y las subclases Coche, Avion y Barco. Vehiculo tendrá al menos 1 atributo y 2 metodos específicos. Despuós cada subclase Coche, Avion y Barco tendrán al menos 1 atributo y 1 método específico

// Definición de la superclase Vehiculo
class Vehiculo {
    protected $marca;
    protected $modelo;
  
    public function __construct($marca, $modelo) {
      $this->marca = $marca;
      $this->modelo = $modelo;
    }
  
    public function getMarca() {
      return $this->marca;
    }
  
    public function getModelo() {
      return $this->modelo;
    }
  
    public function arrancar() {
      echo $this->marca . " " . $this->modelo . " está arrancando...\n";
    }
}

// Definición de la subclase Coche, que hereda de la clase Vehiculo
class Coche extends Vehiculo {
  public function acelerar() {
    echo $this->marca . " " . $this->modelo . " está acelerando...\n";
  }
}

// Definición de la subclase Avion, que hereda de la clase Vehiculo
class Avion extends Vehiculo {
  public function despegar() {
    echo $this->marca . " " . $this->modelo . " está despegando...\n";
  }
}

// Definición de la subclase Barco, que hereda de la clase Vehiculo
class Barco extends Vehiculo {
  public function navegar() {
    echo $this->marca . " " . $this->modelo . " está navegando...\n";
  }
}

// Creación de objetos a partir de las subclases
$coche = new Coche("Ford", "Mustang");
$avion = new Avion("Boeing", "747");
$barco = new Barco("Royal Caribbean", "Oasis of the Seas");

// Uso de los métodos heredados de la superclase
echo $coche->getMarca() . " " . $coche->getModelo() ."<br>";
$coche->arrancar();
echo "<br>";
echo $avion->getMarca() . " " . $avion->getModelo() ."<br>";
$avion->arrancar();
echo "<br>";
echo $barco->getMarca() . " " . $barco->getModelo() ."<br>";
$barco->arrancar();
echo "<br>";

// Uso de los métodos específicos de las subclases
$coche->acelerar();
echo "<br>";
$avion->despegar();
echo "<br>";
$barco->navegar();
  
?>