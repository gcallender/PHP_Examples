<?php

echo "<h1>Cookie</h1>";

// Eliminar Cookie
unset($_COOKIE["username"]);
setcookie("username", null, -1);
unset($_COOKIE["password"]);
setcookie("password", null, -1);

if (isset($_COOKIE["username"])) {
    echo "<p>
    Bienvenido cookie " . $_COOKIE["username"] . ".
    </p>";
    // Modificacion de Cookie, cambio de nombre
    //setcookie("username", "HOLA");
} else {
    echo "<p>
    Sin cookie.
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
        <form method="post" action="loginCookie.php">
            Usuario: <input type="text" name="username"/>
            <br />
            Contraseña: <input type="password" name="password"/>
            <br />
            <input type="submit" name="submit"/>
        </form>

    </body>
</html>
