<?php
// Activacion modo estricto
declare (strict_types = 1);

// Incluir archivo
//include // Si el archivo no se encuentra genera
//una advertencia, pero se sigue ejecutando el script.
//require // Si el archivo no se encuentra genera
//un error fatal y se detiene la ejecucion.
//include_once // Evita inclusiones repetidas
//require_once // Evita inclusiones repetidas

//require_once "Class/Persona.php";
//require_once "Class/Vendedor.php";
require_once "Persona.php";
require_once "Vendedor.php";

echo "<h1>Introducción a POO</h1>";

echo "<h2>Creación de un Objeto:</h2>";

$persona1 = new Persona();
//$persona1->setNombre("Juan");
$persona1->settingNombre("Juan");
/*echo "<p>
Hola " . $persona1->getNombre() . "
</p>";*/
echo "<p>
Hola " . $persona1->gettingNombre() . "
</p>";
$persona1->obtenerEdad(1992);

// Obtener variable static
echo "<p>
La variable estática es: " . $persona1::$miStatic . "
</p>";
// Cambio de variable static
//$persona1::$miStatic = "Chao";
//Persona::$miStatic = "Hola";
echo "<p>
La variable estática es: " . Persona::$miStatic . "
</p>";

echo "<h2>Herencia:</h2>";

$vendedor = new Vendedor();
$vendedor->lluviaEstrellas();
$vendedor->obtenerEdad(1994);

 ?>
