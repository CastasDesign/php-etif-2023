<?php

// Definimos la superclase Vehiculo
class Vehiculo {
  // Atributos
  protected $velocidadMaxima;

  // Constructor
  public function __construct($velocidadMaxima) {
    $this->velocidadMaxima = $velocidadMaxima;
  }

  // Métodos
  public function getVelocidadMaxima() {
    return $this->velocidadMaxima;
  }

  public function acelerar() {
    echo "Acelerando...\n";
  }
}

// Definimos las subclases Coche, Avion y Barco
class Coche extends Vehiculo {
  // Atributos
  private $modelo;

  // Constructor
  public function __construct($velocidadMaxima, $modelo) {
    parent::__construct($velocidadMaxima);
    $this->modelo = $modelo;
  }

  // é
  public function getModelo() {
    return $this->modelo;
  }

  public function frenar() {
    echo "Frenando...\n";
  }
}

class Avion extends Vehiculo {
  // Atributos
  private $tipo;

  // Constructor
  public function __construct($velocidadMaxima, $tipo) {
    parent::__construct($velocidadMaxima);
    $this->tipo = $tipo;
  }

  // é
  public function getTipo() {
    return $this->tipo;
  }

  public function despegar() {
    echo "Despegando...\n";
  }
}

class Barco extends Vehiculo {
  // Atributos
  private $nombre;

  // Constructor
  public function __construct($velocidadMaxima, $nombre) {
    parent::__construct($velocidadMaxima);
    $this->nombre = $nombre;
  }

  // é
  public function getNombre() {
    return $this->nombre;
  }

  public function atracar() {
    echo "Atracando...\n";
  }
}

// Creamos instancias de cada clase
$coche = new Coche(200, "Seat Ibiza");
$avion = new Avion(800, "Boeing 747");
$barco = new Barco(50, "Titanic");

// Llamamos a é de cada instancia
echo "Coche: " . $coche->getModelo() . ", velocidad máxima: " . $coche->getVelocidadMaxima() . " km/h\n";
$coche->acelerar();
$coche->frenar();

echo "Avión: " . $avion->getTipo() . ", velocidad máxima: " . $avion->getVelocidadMaxima() . " km/h\n";
$avion->acelerar();
$avion->despegar();

echo "Barco: " . $barco->getNombre() . ", velocidad máxima: " . $barco->getVelocidadMaxima() . " km/h\n";
$barco->acelerar();
$barco->atracar();

?>