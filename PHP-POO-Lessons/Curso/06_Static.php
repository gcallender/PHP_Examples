<?php

echo "<h1>Static</h1>";

echo "<p style='font-weight: bold;'>
OBS: Para acceder a atributos y métodos de tipo
static dentro de una clase se debe usar la
palabra reservada \"self::\" (el uso de static
se asemeja a una variable).
<br />
i.e.: self::\"atributo_static\"
</p>";
echo "<p style='font-weight: bold;'>
OBS: A los atributos y métodosde tipo \"static\"
se puede acceder usando solo el nombre de
la clase, de la siguiente forma:
<br />
\"class_name\"::\"atributo_static\"
<br />
\"class_name\"::\"metodo_static\"
</p>";

class Pagina {
    public $nombre;
    public static $url;

    public function __construct() {
        $this->nombre = "Mi pagina";
        self::$url = "www.mipagina.com";
    }
    public function bienvenida() {
        echo "<p>
        Bienvenido a la página: <b>" . $this->nombre . "</b>,
        la dirección es: <b>" . self::$url . "</b>.
        </p>";
    }
    public static function bienvenida2() {
        // Un metodo static no puede acceder a un atributo
        //echo "<p>Bienvenido a: <b>" . $this->nombre . "</b>.</p>";
        // Un metodo static si puede acceder a un atributo static
        echo "<p>Bienvenido a: <b>" . self::$url . "</b>.</p>";
    }
    public function newURL($newDir) {
        self::$url = $newDir;
        echo "<p>
        Se ha cambiado la URL.
        </p>";
    }
}

echo "<h2>Creación de objeto:</h2>";
$pagina = new Pagina();
$pagina->bienvenida();

echo "<h2>Uso de métodos sin declarar objetos:</h2>";
// No funciona porque el metodo accede a un atributo
//Pagina::bienvenida();
// Esto funciona porque solo se accede a static
Pagina::bienvenida2();
Pagina::newURL("www.mipage.cl");
Pagina::bienvenida2();

 ?>
