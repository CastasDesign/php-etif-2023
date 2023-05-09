<?php
class Vehicle {
  protected $name; 
  public function __construct($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function combustible() {
    echo $this->name . " es un vehiculo que funciona con combustible...\n";
  }
}
class Car extends Vehicle {
  public function gasolina() {
    echo $this->name . " utiliza como combustible gasolina 95\n";
  }
}
class Airplane extends Vehicle {
  public function diesel() {
    echo $this->name . " utiliza como combustible biodiesel\n";
  }
}
class Ship extends Vehicle {
  public function hidrogeno() {
    echo $this->name . " utiliza como combustible hidrogeno liquido\n";
  }
}

$Car = new Car("El Ford Focus");
$Airplane = new Airplane("El Boing 747");
$Ship = new Ship("El Queen Mary 2");

echo $Car->getName() . "\n";
$Car->combustible();

echo $Airplane->getName() . "\n";
$Airplane->combustible();

echo $Ship->getName() . "\n";
$Ship->combustible();

$Car->gasolina();
$Airplane->diesel();
$Ship->hidrogeno();

?>