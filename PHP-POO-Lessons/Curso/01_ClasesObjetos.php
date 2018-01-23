<?php

// Clases y objetos
echo "<h1>Clases y Objetos</h1>";

// Creacion de clase Persona
class Persona {
    // Atributos
    public $nombre = "Bob";

    // Metodos
    public function hablar($msg) {
        echo "<p>
        $msg
        </p>";
    }
}

$persona1 = new Persona();
echo "<p>
El nombre de \$persona1 es: $persona1->nombre
</p>";
$persona1->hablar("Te digo mi primer mensaje");


 ?>
