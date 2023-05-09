<?php

//HERENCIA
//Superclase "Foo"
class Foo {
    public function printItem($string) {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    public function printPHP(){
        echo 'PHP is great.' . PHP_EOL;
    }
}

//Subclase "bar"
class bar extends Foo {
    public function printItem($string) {
        echo 'Bar: ' . $string . PHP_EOL;
    }
// el metodo printPHP se hereda al tener la extends aunque no este definido en la subclase
}

$foo = new Foo(); // Instanciación de la clase "Foo" para crear objetos
$bar = new Bar(); // Instanciación de la clase "bar" para crear objetos

$foo->printItem('baz'); // Salida: 'Foo: baz'
$foo->printPHP();       // Salida: 'PHP is great' 

$bar->printItem('baz'); // Salida: 'Bar: baz'
$bar->printPHP();       // Salida: 'PHP is great'

?>