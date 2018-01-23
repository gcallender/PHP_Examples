<?php

echo "<h1>Modificadores de Acceso</h1>";
echo "<h2>public, private y protected:</h2>";

class Facebook {
    // Atributos
    // Se puede acceder de todas partes
    public $nombre;
    public $edad;
    // Solo se puede acceder dentro de la clase
    private $password;
    // Se puede acceder dentro de la clase y
    // desde la subclase (herencia).
    protected $tipo;

    // Metodos
    public function __construct($nombre, $edad, $password) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->password = $password;
        $this->tipo = "Persona";
    }
    public function verInformacion() {
        echo "<p>
        Nombre: $this->nombre <br />
        Edad: $this->edad <br />
        Password: $this->password <br />
        </p>";
    }
    public function actualizarPass($pass, $newPass) {
        if ($pass == $this->password) {
            $this->cambiarPass($newPass);
            echo "<p>
            Su contraseña se ha actualizado.
            </p>";
        } else {
            echo "<p>
            Contraseña actual errónea.
            </p>";
        }
    }
    private function cambiarPass($newPass) {
        $this->password = $newPass;
    }
}

$facebook = new Facebook("Bob", 30, "1234");
$facebook->verInformacion();
echo "<h3>Actualización de Contraseña:</h3>";
$facebook->actualizarPass("1234", "4321");
$facebook->verInformacion();
/*
echo "<pre>
$facebook->nombre
</pre>";
echo "<pre>
$facebook->password
</pre>";
*/
