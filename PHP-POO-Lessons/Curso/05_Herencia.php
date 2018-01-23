<?php

echo "<h1>Herencia</h1>";

// OBS: PHP no permite herencia multiple
echo "<p style='font-weight: bold;'>
OBS: PHP no permite herencia multiple.
</p>";

class Vehiculo {
    public $motor;
    protected $marca;
    public $color;

    public function __construct() {
        $this->motor = false;
        $this->marca = "undefined";
        $this->color = "undefined";
    }
    public function estado() {
        if ($this->motor) {
            echo "<p>
            El motor está encendido.
            </p>";
        } else {
            echo "<p>
            El motor está apagado.
            </p>";
        }
    }
    public function encender() {
        if ($this->motor) {
            echo "<p>
            Cuidado, el motor ya está encendido.
            </p>";
        } else {
            $this->motor = true;
            echo "<p>
            El motor se ha encendido.
            </p>";
        }
    }
    public function setBrand($brand) {
        $this->marca = $brand;
    }
}

// Herencia
class Moto extends Vehiculo {
    public function getBrand() {
        return $this->marca;
    }
}
class CuatriMoto extends Moto {
    public function getBrand() {
        return $this->marca;
    }
}

echo "<h2>Creación de objetos:</h2>";

// Creacion de objeto
echo "<h3>Creación de un vehículo:</h3>";
$vehiculo = new Vehiculo();
$vehiculo->estado();
$vehiculo->encender();
$vehiculo->estado();

echo "<h3>Creación de una moto (herencia de Vehiculo):</h3>";
$moto = new Moto();
$moto->estado();
$moto->setBrand("Harley Davidson");
echo "<p>La marca de la moto es: " . $moto->getBrand() . ".</p>";
// No se puede al atributo "marca" por estar
// declarado de tipo "protected"
//echo "<p>La marca de la moto es: " . $moto->marca . ".</p>";

echo "<h3>Creación de una moto (herencia de Moto):</h3>";
$cuatrimoto = new CuatriMoto();
$cuatrimoto->estado();


 ?>
