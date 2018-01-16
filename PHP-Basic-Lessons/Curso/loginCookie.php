<?php

$user = "user01";
$pass = "1234";

if ($_POST["username"] == $user && $_POST["password"] == $pass) {
    // El ultimo parametro es la duracion del cookie,
    // i.e. 60*60*24*365 es una duracion de 1 año.
    setcookie("username", $_POST["username"], time()+60*60*24*365);
    setcookie("password", $_POST["password"], time()+60*60*24*365);
    echo "<p>
    Cookie creado.
    </p>";
} else {
    echo "<p>
    Usuario y/o contraseña incorrecto.
    </p>";
}

 ?>
