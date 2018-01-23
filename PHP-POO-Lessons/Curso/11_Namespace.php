<?php
// Para evitar esto se crea un autoload
//require_once "Curso/api/Models/Persona.php";
//require_once "Curso/api/Controllers/PersonaControllers.php";

// Autoload
spl_autoload_register(function($clase) {
    //echo $clase;
    //$ruta = "Curso/api/" . str_replace("\\", "/", $clase) . ".php";
    $ruta = "api/" . str_replace("\\", "/", $clase) . ".php";
    if (is_readable($ruta)) {
        require_once $ruta;
    } else {
        echo "<p>
        El archivo: $ruta no existe.
        </p>";
    }
});

echo "<h1>Namespaces</h1>";

// Uso de namespace
Models\Persona::Hola();
Controllers\PersonaControllers::Hola();

 ?>
