<?php

// Uso de namespace
//namespace curso\persona;

class Persona {
    private $nombre;
    private $apellido;
    private $profesion;
    public static $miStatic = 2017;

    public function __construct() {
        $this->nombre = "";
        $this->apellido = "";
        $this->profesion = "undefined";
    }
    /*
    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }
    public function __get($propiedad) {
        return $this->$propiedad;
    }*/

    /*
    // Generated with package: php-getters-setters
    public function getNombre():string {
        return $this->nombre;
    }
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
        //return $this;
    }
    public function getApellido():string {
        return $this->apellido;
    }
    public function setApellido(string $apellido) {
        $this->apellido = $apellido;
        //return $this;
    }*/

    // Customized
    public function gettingNombre():string {
        return $this->nombre;
    }
    public function settingNombre(string $nombre) {
        $this->nombre = $nombre;
    }
    public function gettingApellido():string {
        return $this->apellido;
    }
    public function settingApellido(string $apellido) {
        $this->apellido = $apellido;
    }

    public function obtenerEdad($f) {
        echo "<p>
        Padre: Tu edad es: " . $this->fecha($f) . ".
        </p>";
    }
    // Metodo privado, solo lo puede usar esta clase.
    /*private function fecha($f) {
        return self::$miStatic - $f;
    }*/
    // Este metodo lo pueden usar las clases hijas.
    protected function fecha($f) {
        return self::$miStatic - $f;
    }

    protected function setProfesion(string $profesion) {
        $this->profesion = $profesion;
    }
    protected function getProfesion():string {
        return $this->profesion;
    }

    public function __destruct() {
        echo "<p>
        Se eliminó.
        </p>";
    }

}


 ?>
