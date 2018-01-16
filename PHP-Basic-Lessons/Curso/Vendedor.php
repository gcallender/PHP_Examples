<?php

// Uso de namespace
//namespace curso\vendedor;

// Para ejemplo de namespace:
//require_once "./POO/Clases/Persona.php";
require_once "Persona.php";

// Si se usa namespace, la extension se debe hacer asi:
// class "clase_hija" extends \"clase_padre"
//class Vendedor extends \Persona {
// Si persona posee namespace se debe agregar asi:
//use poo\clases\persona\Persona as personaClase;
//class Vendedor extends personaClase {
class Vendedor extends Persona {
    private $codInterno;
    private $caja;

    public function __construct() {
        $this->codInterno = 0;
        $this->caja = "";
    }

    public function lluviaEstrellas() {
        $tiempo = parent::fecha(1994) + 25;
        echo "<p>
        Hijo: Tu edad será: $tiempo.
        </p>";
    }

    // Metodo de prueba para namespace
    public function pruebaNamespace() {
        echo "<p>
        Método de Vendedor <br />
        Origen: Curso/Vendedor.
        </p>";
    }
}

 ?>
