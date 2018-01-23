<?php

echo "<h1>Interfaces</h1>";

interface Auto {
    // OBS: Las interfaces no pueden tener "contenido",
    // es decir no se implementan los metodos.
    // Se declaran los metodos "vacios".
    public function encender();
    public function apagar();
}
interface Gasolina extends Auto {
    public function vaciarEstanque();
    public function llenarEstanque($cant);
}

class Deportivo implements Gasolina {
    private $estado;
    private $estanque;

    public function __construct() {
        $this->estado = false;
        $this->estanque = 0;
    }
    public function estado() {
        if ($this->estado) {
            echo "<p>
            El auto está encendido y tiene $this->estanque
            litros en el estanque.
            </p>";
        } else {
            echo "<p>
            El auto está apagado.
            </p>";
        }
    }
    // Obligatoriamente se deben implementar
    // los metodos de las interfaces.
    public function encender() {
        if ($this->estado) {
            echo "<p>
            Error: El auto ya se encuentra encendido.
            </p>";
        } else {
            if ($this->estanque == 0) {
                echo "<p>
                El auto no se puede encender, porque
                el estanque está vacío.
                </p>";
            } else {
                $this->estado = true;
                echo "<p>
                El auto se ha encendido.
                </p>";
            }
        }
    }
    public function apagar() {
        if ($this->estado) {
            $this->estado = false;
            echo "<p>
            El auto se ha apagado.
            </p>";
        } else {
            echo "<p>
            Error: El auto ya se encuentra apagado.
            </p>";
        }
    }
    public function vaciarEstanque() {
        $this->estanque = 0;
    }
    public function llenarEstanque($cant) {
        $this->estanque = $cant;
    }
    // Metodos propios de la clase
    public function usar($km) {
        if ($this->estado) {
            $reducir = $km / 3;
            $this->estanque -= $reducir;
            if ($this->estanque == 0) {
                $this->estado = false;
            }
        } else {
            echo "<p>
            El auto está apagado y no se puede usar.
            </p>";
        }
    }
}

$auto = new Deportivo();
$auto->llenarEstanque(100);
$auto->encender();
$auto->usar(200);
$auto->estado();

 ?>
