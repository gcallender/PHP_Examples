<?php

$user = "user01";
$pass = "1234";
session_start();

if ($_POST["username"] == $user && $_POST["password"] == $pass) {
    $_SESSION["login"] = "administrador";
    echo "<p>
    Sesión creada.
    </p>";
} else {
    echo "<p>
    Usuario y/o contraseña incorrecto.
    </p>";
}

 ?>
