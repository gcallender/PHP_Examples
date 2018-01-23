<?php

echo "<h1>Traits</h1>";

trait Humano {
    // Atributos
    public $nombre;

    // Metodos
    abstract function asignarNombre($nombre);
    public function mostrarNombre() {
        echo "<p>
        El nombre es: $this->nombre.
        </p>";
    }
}
trait Trabajador {
    protected function mensaje() {
        return "soy un trabajador";
    }
    public function Hola() {
        echo "<p>
        Del trait Trabajador.
        </p>";
    }
}

class Persona {
    // Uso del trait
    use Humano, Trabajador;

    function asignarNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function saludo() {
        echo "<p>
        Hola a todos " . $this->mensaje() . ".
        </p>";
    }
    public function Hola() {
        echo "<p>
        De la clase Persona.
        </p>";
    }
}

$persona = new Persona();
$persona->saludo();
$persona->asignarNombre("Bob");
$persona->mostrarNombre();
echo "<p>
Mi nombre es: $persona->nombre.
</p>";

$persona->Hola();

echo "<p style='font-weight: bold;'>
OBS: Si existe un método idéntico en la clase y
en algún trait, PHP privilegia el método de la
clase. Sin embargo, no pueden existir dos métodos
iguales en distintos traits y ser usados en
la misma clase, ya que se produce un conflicto
que lleva a un error grave.
</p>";


 ?>
