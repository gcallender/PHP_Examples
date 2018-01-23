<?php

echo "<h1>Constructores y Destructores</h1>";

class Loteria {
    // Atributos
    public $numero;
    public $intentos;
    public $resultado = false;

    // Metodos
    // Constructor
    public function __construct($numero, $intentos) {
        $this->numero = $numero;
        $this->intentos = $intentos;
    }
    public function sortear() {
        $minimo = $this->numero / 2;
        $maximo = $this->numero * 2;
        for ($i = 0; $i < $this->intentos; $i++) {
            $intento = rand($minimo, $maximo);
            if ($this->resultado != true) {
                //self::intentos($intento);
                $this->intentos($intento);
            } else {
                $this->intentos = $i;
            }
        }
    }
    public function intentos($intento) {
        if ($intento == $this->numero) {
            $this->resultado = true;
            echo "<p>
            <b>$intento == $this->numero.</b>
            </p>";
        } else {
            echo "<p>
            $intento != $this->numero.
            </p>";
        }
    }
    // Destructor
    public function __destruct() {
        if ($this->resultado) {
            echo "<p>
            Felicidades, has ganado en $this->intentos intentos.
            </p>";
        } else {
            echo "<p>
            Que lástima, has perdido en $this->intentos intentos.
            </p>";
        }
    }
}

echo "<h2>Ejemplo de loteria:</h2>";
$loteria = new Loteria(10, 10);
$loteria->sortear();
