<?php

echo "<h1>Métodos y Atributos</h1>";

// Creacion de clase Persona
class Persona {
    // Atributos
    public $nombre = "";
    public $apellido = "";

    // Metodos
    public function guardar($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        echo "<p>
        Se han guardado sus datos.
        </p>";
    }
    public function mostrar() {
        echo "<p>
        Mi nombre es: $this->nombre y mi apellido: $this->apellido.
        </p>";
    }
}

class Lista {
    // Atributos
    public $personas = array();

    // Metodos
    public function guardar($personas) {
        $this->personas[] = $personas;
    }
    public function mostrar() {
        $aux = "Lista de personas: <br />";
        for ($i = 0; $i < count($this->personas); $i++) {
            $aux .= "Nombre: " . $this->personas[$i]->nombre . " | ";
            $aux .= "Apellido: " . $this->personas[$i]->apellido . ". <br />";
        }
        echo "<p>
        $aux
        </p>";
    }
}

$persona1 = new Persona();
$persona1->guardar("Juan", "Perez");
$persona1->mostrar();
$persona2 = new Persona();
$persona2->guardar("Pedro", "Soto");
$persona2->mostrar();
echo "<h2>Creación de lista de personas:</h2>";
$lista = new Lista();
$lista->guardar($persona1);
$lista->guardar($persona2);
$lista->mostrar();

 ?>
