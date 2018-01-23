<?php
namespace Config;

class Autoload {
    public function run() {
        spl_autoload_register(function($class) {
            $ruta = str_replace("\\", "/", $class) . ".php";
            if (is_readable($ruta)) {
                require_once $ruta;
            }
        });
    }
}


 ?>
