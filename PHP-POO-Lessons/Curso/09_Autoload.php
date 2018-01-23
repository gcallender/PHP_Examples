<?php

echo "<h1>Autoload</h1>";

function autoload($clase) {
    // Direccion en donde se encuentren las clases
    include "clases/" . $clase . ".php";
    //include "Curso/clases/" . $clase . ".php";
}
spl_autoload_register("autoload");

Persona::mostrar("Hola mundo");
Auto::mostrar("Hola mundo");

 ?>
