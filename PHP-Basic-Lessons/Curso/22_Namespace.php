<?php

require_once "POO/Clases/Vendedor.php";
require_once "POO/Clases/Persona.php";
require_once "Curso/Vendedor.php";
require_once "Curso/Persona.php";

// Uso de namespace
echo "<h1>Namespace</h1>";

// Renombramiento con namespace
//use poo\clases\vendedor\Vendedor as vendedorClase;
//use poo\clases\persona\Persona as personaClase;
use curso\vendedor\Vendedor as vendedorCurso;
use curso\persona\Persona as personaCurso;
// Uso de use en conjunto
use poo\clases\{vendedor\Vendedor as vendedorClase,
    persona\Persona as personaClase};

echo "<h2>Creación de vendedores:</h2>";
$vendedor1 = new vendedorClase();
$vendedor1->pruebaNamespace();
$vendedor2 = new vendedorCurso();
$vendedor2->pruebaNamespace();

echo "<h2>Creación de personas:</h2>";
$persona1 = new personaClase();
$persona1->obtenerEdad(1992);
$persona2 = new personaCurso();
$persona2->obtenerEdad(1996);

 ?>
