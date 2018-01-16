<?php
// Modo estricto
declare (strict_types = 1);

//require_once "Curso/Persona.php";
require_once "Persona.php";

// Clases anonimas
echo "<h1>Clases Anónimas</h1>";

new class() {
    private $id;

    public function __construct() {
        $this->id = 0;
    }
};

$anonimo1 = new class("Bob") {
    private $id;
    private $name;

    public function __construct($name) {
        $this->id = 0;
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
};
$anonimo2 = new class("Peter") {
    private $id;
    private $name;

    public function __construct($name) {
        $this->id = 0;
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
};

echo "<pre>
El identificador de la clase \$anonimo1 es: " . get_class($anonimo1) . ".
</pre>";
echo "<pre>
El identificador de la clase \$anonimo2 es: " . get_class($anonimo2) . ".
</pre>";

echo "<p>
El nombre de \$anonimo1 es: " . $anonimo1->getName() . ".
</p>";
echo "<p>
El nombre de \$anonimo2 es: " . $anonimo2->getName() . ".
</p>";


// Herencia
echo "<h2>Herencia:</h2>";
new class(10) extends Persona {
    private $num;

    public function __construct($num) {
        $this->num = $num;
        parent::obtenerEdad(1992);
    }
};
$personaAnonima = new class("Jhon") extends Persona {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    // Acceso y uso de metodo protected
    /*public function setProfesion(string $profesion) {
        parent::setProfesion($profesion);
    }*/
    public function getProfesion():string {
        parent::setProfesion("Lawyer");
        return parent::getProfesion();
    }
};

echo "<p>
El nombre de \$personaAnonima es: " . $personaAnonima->getName() . ".
</p>";
echo $personaAnonima->obtenerEdad(2000);
echo "<h3>Uso de protected:</h3>";
//$personaAnonima->setProfesion("Doctor");
echo "<p>
La profesion de \$personaAnonima es: " . $personaAnonima->getProfesion() . ".
</p>"

 ?>
