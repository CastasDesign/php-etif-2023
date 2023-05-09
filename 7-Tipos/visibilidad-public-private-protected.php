<?php

//VISIBILIDAD
/**
 * Definici�n de MyClass
 */
class MyClass {
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello(){
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public;    // Funciona bien
//echo $obj->protected; // Error Fatal
//echo $obj->private;   // Error Fatal
$obj->printHello();   // Muestra Public, Protected y Private


/**
 * Definici�n de MyClass2
 */
class MyClass2 extends MyClass {
    // Se pueden redeclarar las propiedades p�blica y protegida, pero no la privada
    public $public = 'Public2';
    protected $protected = 'Protected2';
    private $otroatributo = 'Hola'; //Unico de MyClass2

    function printHello(){
        echo $this->public;
        echo $this->protected;
        //echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public;    // Funciona bien
//echo $obj2->protected; // Error Fatal
//echo $obj2->private;   // Undefined
$obj2->printHello();   // Muestra Public2, Protected2, Undefined

?>