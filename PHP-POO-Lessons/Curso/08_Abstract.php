<?php

echo "<h1>Clases y Métodos Abstractos</h1>";

abstract class Molde {
    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
}

class Persona extends Molde {
    private $nombre;
    private $msg = "Hola a todos";

    public function __construct() {
        $this->nombre = "undefined";
        $this->apellido = "undefined";
    }
    // Es obligacion implementar los metodos abstractos.
    // OBS: Se pueden agregar mas parametros
    // a los metodos definidos como abstractos.
    public function ingresarNombre($nombre, $apellido = "") {
        $this->nombre = $nombre . " " . $apellido;
    }
    public function obtenerNombre() {
        return $this->nombre;
    }
    // Métodos propios de la clase
    public function saludo() {
        echo "<p>
        Hola a todos.
        </p>";
    }
}


$persona = new Persona();
$persona->saludo();
$persona->ingresarNombre("Bob", "Smith");
echo "<p>
El nombre de \$persona es: " . $persona->obtenerNombre() . ".
</p>";

 ?>
