<?php
namespace Config;

class Enrutador {

    public static function run(Request $request) {
        $controlador = $request->getControlador() . "Controller";
        $ruta = ROOT . "Controllers" . DS . $controlador . ".php";
        $metodo = $request->getMetodo();
        //print "<p>Metodo: $metodo.</p>";
        $argumento = $request->getArgumento();
        /*echo "<pre>
        Ruta Enrutador: $ruta
        </pre>";*/
        if (is_readable($ruta)) {
            require_once $ruta;
            $mostrar = "Controllers\\" . $controlador;
            $controlador = new $mostrar;
            //if (!isset($metodo)) {
            if (!isset($argumento)) {
                call_user_func(array($controlador, $metodo));
            } else {
                //call_user_func_array(array($controlador, $metodo), $argumento);
                call_user_func_array(array($controlador, $metodo), array($argumento));
            }
        }
    }
}

 ?>
