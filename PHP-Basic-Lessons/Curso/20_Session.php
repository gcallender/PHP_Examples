<?php

echo "<h1>Session</h1>";

// Inicio de sesion
session_start();
// Sobreescritura de directivas de php.ini
//session_start(["name"=>"USER01"]);

// Eliminacion de todas las sesiones
//session_destroy();
// Eliminacion de una sesion especifica
unset($_SESSION["login"]);

// Estado de la sesion
if (session_status() == PHP_SESSION_DISABLED) {
    echo "<p>
    Sesión deshabilitada.
    </p>";
}
if (session_status() == PHP_SESSION_NONE) {
    echo "<p>
    No existe ninguna sesión.
    </p>";
}
if (session_status() == PHP_SESSION_ACTIVE) {
    echo "<p>
    Existe una sesión y está habilitada.
    </p>";
}

if (isset($_SESSION["login"])) {
    echo "<p>
    Bienvenido session " . $_SESSION["login"] . ".
    </p>";
    // Cambio de nombre de la sesion.
    //$_SESSION["login"] = "HOLA";
} else {
    echo "<p>
    Sin sesión.
    </p>";
}

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="loginSession.php">
            Usuario: <input type="text" name="username"/>
            <br />
            Contraseña: <input type="password" name="password"/>
            <br />
            <input type="submit" name="submit"/>
        </form>

    </body>
</html>
