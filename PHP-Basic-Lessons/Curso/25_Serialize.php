<?php

// Serialize and unserialize
echo "<h1>Serialize and Unserialize</h1>";

$datos = array("nombre"=>"Bob", "color"=>"azul",
            "edad"=>20, "feliz"=>true);
// Serialize
$cadena = serialize($datos);
echo "<p>
Visualización de serialize:
</p>";
echo $cadena . "<br />";
var_dump($cadena);
// Unserialize
$datos2 = unserialize($cadena);
echo "<p>
Visualización de unserialize:
</p>";
var_dump($datos2);

echo "<h2>Serialize & Unserialize in Object:</h2>";
//require_once ("Curso/Persona.php");
//require_once ("Curso/Vendedor.php");
require_once ("Persona.php");
require_once ("Vendedor.php");
$persona1 = new Persona();
$persona1->settingNombre("Bob");

$cadena2 = serialize($persona1);
echo "<p>
Visualización de serialize:
</p>";
echo $cadena2 . "<br />";
var_dump($cadena2);
// Opciones (filtro de clases)
$whitelist = ["Persona"];
//$whitelist = ["Vendedor"];  // ejemplo de filtrado
$object = unserialize($cadena2, ["allowed_classes"=>$whitelist]);
echo "<p>
Visualización de unserialize:
</p>";
var_dump($object);

 ?>
